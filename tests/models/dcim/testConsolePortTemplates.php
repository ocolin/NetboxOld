<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testConsolePortTemplates extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new ConsolePortTemplates();
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
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
        $result = $o->getDetail( id: $porttemp->id );
        
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
        $this->deleteDetail( $porttemp->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
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
        $this->deleteDetail( $porttemp->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new ConsolePortTemplates();
        $result = $this->postDetail( devtype: $_ENV['devtype']->id );

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
        $o = new ConsolePortTemplates();
        $result = $o->postList(
        options: [
            [ 
                'name'        => 'testConsolePortTemplate', 
                'device_type' => $_ENV['devtype']->id
            ],
            [ 
                'name'        => 'testConsolePortTemplate2', 
                'device_type' => $_ENV['devtype']->id 
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
        foreach( $result['body'] AS $porttemp )
        {
            $this->deleteDetail( id: $porttemp->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
        $result = $o->putDetail( 
                     id: $porttemp->id, 
                   name: 'updateConsolePortTemplate', 
            device_type: $_ENV['devtype']->id
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
        $this->deleteDetail( $porttemp->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
        $result = $o->putList(
            options: [
                [ 
                           'id'   => $porttemp->id, 
                           'name' => 'putConsolePortTemplate',
                    'device_type' => $_ENV['devtype']->id
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
        $this->deleteDetail( $porttemp->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
        $result = $o->patchDetail(
                     id: $porttemp->id,
                   name: 'patchConsolePortTemplate',
            device_type: $_ENV['devtype']->id
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
        $this->deleteDetail( $porttemp->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
        $result = $o->patchList(
            options: [
                [ 
                          'id' => $porttemp->id, 
                        'name' => 'patchConsolePortTemplate',
                 'device_type' => $_ENV['devtype']->id 
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
        $this->deleteDetail( $porttemp->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];
        
        $o = new ConsolePortTemplates();
        $result = $o->deleteDetail( id: $porttemp->id );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $porttemp = $this->postDetail( devtype: $_ENV['devtype']->id )['body'];

        $o = new ConsolePortTemplates();
        $result = $o->deleteList(
            options: [[ 'id' => $porttemp->id ]]
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

    public function postDetail( int $devtype ) : array
    {
        $o = new ConsolePortTemplates();

        return $o->postDetail( 
            name: 'testConsolePortTemplate',
            device_type: $devtype
        );
    }



/* DELETE A DEVICE TYPES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new ConsolePortTemplates();

        return $o->deleteDetail( id: $id  );
    }


/*
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
    public static function setupDevType()
    {
        self::setupManufacter();
        $o = new DeviceTypes();
        $_ENV['devtype'] = $o->postDetail(
            model: 'phptestunit_devtype',
             slug: 'phptestunit_devtype',
             manufacturer: $_ENV['manf']->id
        )['body'];
        

        
    }


    public static function setupManufacter()
    {
        $o = new Manufacturers();
        $_ENV['manf'] = $o->postDetail(
            name: 'phpunit_manf',
            slug: 'phpunit_manf'
        )['body'];
    }



/*
---------------------------------------------------------------------------- */

/**
* @afterClass
*/
    public static function closeDevType()
    {   
        $o = new DeviceTypes();
        $o->deleteDetail( id: $_ENV['devtype']->id );
        self::closeManufacturer();
        unset( $_ENV['devtype'] );
    }


    public static function closeManufacturer()
    {
        $o = new Manufacturers();
        $test = $o->deleteDetail( id: $_ENV['manf']->id );
        unset( $_ENV['manf'] );
        
    }


}