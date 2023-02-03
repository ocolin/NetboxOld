<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testDeviceTypes extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new DeviceTypes();
        $result = $o->options();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'name', $result['body'] );
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];
        

        $o = new DeviceTypes();
        $result = $o->getDetail( id: $devtype->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $devtype->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];

        $o = new DeviceTypes();
        $result = $o->getList();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'results', $result['body'] );
        $this->assertIsArray( $result['body']->results );
        $this->assertObjectHasAttribute( 'id', $result['body']->results[0] );

        // CLEAN UP
        $this->deleteDetail( $devtype->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new DeviceTypes();
        $result = $this->postDetail( manf: $_ENV['manf']->id );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );

        //CLEAN UP
        $test = $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new DeviceTypes();
        $result = $o->postList(
        options: [
            [ 
                       'model' => 'testDeviceType1', 
                        'slug' => 'aaa', 
                'manufacturer' => $_ENV['manf']->id
            ],
            [ 
                       'model' => 'testDeviceType2', 
                        'slug' => 'bbb', 
                'manufacturer' => $_ENV['manf']->id 
            ],
        ]  
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        //CLEAN UP
        foreach( $result['body'] AS $devtype )
        {
            $this->deleteDetail( id: $devtype->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];

        $o = new DeviceTypes();
        $result = $o->putDetail( 
                      id: $devtype->id, 
                   model: 'updateDeviceType', 
                    slug: 'updateDeviceType',
            manufacturer: $_ENV['manf']->id
        );
        
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $devtype->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];

        $o = new DeviceTypes();
        $result = $o->putList(
            options: [
                [ 
                              'id' => $devtype->id, 
                           'model' => 'putRegion',
                            'slug' => 'putRegion',
                    'manufacturer' => $_ENV['manf']->id
                ]
            ]
        );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'][0] );

        // CLEAN UP
        $this->deleteDetail( $devtype->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];

        $o = new DeviceTypes();
        $result = $o->patchDetail(
                      id: $devtype->id,
                   model: 'patchDeviceType',
                    slug: 'patchDeviceType',
            manufacturer: $_ENV['manf']->id
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );


        // CLEAN UP
        $this->deleteDetail( $devtype->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];

        $o = new DeviceTypes();
        $result = $o->patchList(
            options: [
                [ 
                           'id' => $devtype->id, 
                        'model' => 'patchRegion',
                         'slug' => 'patchRegion',
                 'manufacturer' => $_ENV['manf']->id 
                ]
            ]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'][0] );

        // CLEAN UP
        $this->deleteDetail( $devtype->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testDeleteDetail() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];
        
        $o = new DeviceTypes();
        $result = $o->deleteDetail( id: $devtype->id );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $devtype = $this->postDetail( manf: $_ENV['manf']->id )['body'];

        $o = new DeviceTypes();
        $result = $o->deleteList(
            options: [[ 'id' => $devtype->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }


/* CREATE A DEVICE TYPES
---------------------------------------------------------------------------- */

    public function postDetail( int $manf ) : array
    {
        $o = new DeviceTypes();

        return $o->postDetail( 
            model: 'testDeviceType',
            slug: 'testDeviceType',
            manufacturer: $manf
        );
    }



/* DELETE A DEVICE TYPES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new DeviceTypes();

        return $o->deleteDetail( id: $id  );
    }


/*
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
    public static function setupManf()
    {
        $o = new Manufacturers();
        $_ENV['manf'] = $o->postDetail(
            name: 'phptestunit_manf',
            slug: 'phptestunit_manf'
        )['body'];
    }



/*
---------------------------------------------------------------------------- */

/**
* @afterClass
*/
    public static function closeManf()
    {
        $o = new Manufacturers();
        $o->deleteDetail( id: $_ENV['manf']->id );
        unset( $_ENV['manf'] );
    }

}