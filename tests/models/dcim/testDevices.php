<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testDevices extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new Devices();
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
        $device = $this->postDetail()['body'];

        $o = new Devices();
        $result = $o->getDetail( id: $device->id );
        
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
        $this->deleteDetail( $device->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];

        $o = new Devices();
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
        $this->deleteDetail( $device->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Devices();
        $result = $this->postDetail();

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
        $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new Devices();
        $result = $o->postList(
            options: [[ 
                    'name'            => 'PHPUnit_Dev',
                    'face'            => 'front',
                    'device_type'     => $_ENV['devtype']->id,
                    'device_role'     => $_ENV['devrole']->id,
                    'tenant'          => $_ENV['tenant']->id,
                    'site'            => $_ENV['site']->id,
                    'rack'            => $_ENV['rack']->id,
                    'virtual_chassis' => $_ENV['vc']->id,
                    'vc_position'     => 1
                ]] 
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
        foreach( $result['body'] AS $device )
        {
            $this->deleteDetail( id: $device->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];

        $o = new Devices();
        $result = $o->putDetail( 
                         id: $device->id, 
                       name: 'PHPUnit_Dev',
                       face: 'front',
                device_type: $_ENV['devtype']->id,
                device_role: $_ENV['devrole']->id,
                     tenant: $_ENV['tenant']->id,
                       site: $_ENV['site']->id,
                       rack: $_ENV['rack']->id,
            virtual_chassis: $_ENV['vc']->id,
                vc_position: 1

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
        $this->deleteDetail( $device->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];

        $o = new Devices();
        $result = $o->putList(
            options: [
                [ 
                    'id'              => $device->id,
                    'name'            => 'PHPUnit_Dev',
                    'face'            => 'front',
                    'device_type'     => $_ENV['devtype']->id,
                    'device_role'     => $_ENV['devrole']->id,
                    'tenant'          => $_ENV['tenant']->id,
                    'site'            => $_ENV['site']->id,
                    'rack'            => $_ENV['rack']->id,
                    'virtual_chassis' => $_ENV['vc']->id,
                    'vc_position'     => 1
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
        $this->deleteDetail( $device->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];

        $o = new Devices();
        $result = $o->patchDetail(
                         id: $device->id, 
                       name: 'PHPUnit_Dev',
                       face: 'front',
                device_type: $_ENV['devtype']->id,
                device_role: $_ENV['devrole']->id,
                     tenant: $_ENV['tenant']->id,
                       site: $_ENV['site']->id,
                       rack: $_ENV['rack']->id,
            virtual_chassis: $_ENV['vc']->id,
                vc_position: 1
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
        $this->deleteDetail( $device->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];

        $o = new Devices();
        $result = $o->patchList(
            options: [
                [ 
                    'id'              => $device->id,
                    'name'            => 'PHPUnit_Dev',
                    'face'            => 'front',
                    'device_type'     => $_ENV['devtype']->id,
                    'device_role'     => $_ENV['devrole']->id,
                    'tenant'          => $_ENV['tenant']->id,
                    'site'            => $_ENV['site']->id,
                    'rack'            => $_ENV['rack']->id,
                    'virtual_chassis' => $_ENV['vc']->id,
                    'vc_position'     => 1
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
        $this->deleteDetail( $device->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];
        
        $o = new Devices();
        $result = $o->deleteDetail( id: $device->id );

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
        $device = $this->postDetail()['body'];

        $o = new Devices();
        $result = $o->deleteList(
            options: [[ 'id' => $device->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new Devices();

        return $o->postDetail( 
                       name: 'PHPUnit_Dev',
                       face: 'front',
                device_type: $_ENV['devtype']->id,
                device_role: $_ENV['devrole']->id,
                     tenant: $_ENV['tenant']->id,
                       site: $_ENV['site']->id,
                       rack: $_ENV['rack']->id,
            virtual_chassis: $_ENV['vc']->id,
                vc_position: 1
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Devices();

        return $o->deleteDetail( id: $id  );
    }



/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
    public static function setupTest()
    {
        $_ENV['site'] = self::createSite();
        $_ENV['manf'] = self::createManufacturer();
        $_ENV['tenant'] = self::createTenant();
        $_ENV['devtype'] = self::createDeviceType( manf: $_ENV['manf'] );
        $_ENV['location'] = self::createLocation( site: $_ENV['site'] );
        $_ENV['devrole'] = self::createDeviceRole();
        $_ENV['vc'] = self::createVirtualChassis();
        $_ENV['rack'] = self::createRack( site: $_ENV['site'], location: $_ENV['location'] );
    }

/**
* @afterClass
*/
    public static function closeTest()
    {

        self::destroyRack( rack: $_ENV['rack'] );
        self::destroyVirtualChassis( chassis: $_ENV['vc'] );
        self::destroyDeviceRole( devrole: $_ENV['devrole'] );
        self::destroyLocation( location: $_ENV['location'] );
        self::destroyDeviceType( devtype: $_ENV['devtype'] );
        self::destroyTenant( tenant: $_ENV['tenant'] );
        self::destroyManufacturer( manf: $_ENV['manf'] );
        self::destroySite( site: $_ENV['site'] );

        unset( $_ENV['rack'] );
        unset( $_ENV['vc'] );
        unset( $_ENV['devrole'] );
        unset( $_ENV['location'] );
        unset( $_ENV['devtype'] );
        unset( $_ENV['tenant'] );
        unset( $_ENV['manf'] );
        unset( $_ENV['site'] );
    }





}