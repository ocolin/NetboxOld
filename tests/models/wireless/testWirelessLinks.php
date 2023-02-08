<?php 

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testWirelessLinks extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new WirelessLinks();
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
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
        $result = $o->getDetail( id: $link->id );
        
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
        $this->deleteDetail( $link->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
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
        $this->deleteDetail( $link->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new WirelessLinks();
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
        $o = new WirelessLinks();
        $result = $o->postList(
            options: [[ 
                'interface_a' => $_ENV['interfaceA']->id,
                'interface_b' => $_ENV['interfaceB']->id,
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
        foreach( $result['body'] AS $link )
        {
            $this->deleteDetail( id: $link->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
        $result = $o->putDetail( 
                     id: $link->id, 
            interface_a: $_ENV['interfaceA']->id,
            interface_b: $_ENV['interfaceB']->id,               
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
        $this->deleteDetail( $link->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
        $result = $o->putList(
            options: [
                [ 
                             'id' => $link->id,
                    'interface_a' => $_ENV['interfaceA']->id,
                    'interface_b' => $_ENV['interfaceB']->id,
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
        $this->deleteDetail( $link->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
        $result = $o->patchDetail(
                     id: $link->id, 
            interface_a: $_ENV['interfaceA']->id,
            interface_b: $_ENV['interfaceB']->id,
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
        $this->deleteDetail( $link->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
        $result = $o->patchList(
            options: [
                [ 
                             'id' => $link->id,
                    'interface_a' => $_ENV['interfaceA']->id,
                    'interface_b' => $_ENV['interfaceB']->id,
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
        $this->deleteDetail( $link->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];
        
        $o = new WirelessLinks();
        $result = $o->deleteDetail( id: $link->id );

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
        $link = $this->postDetail()['body'];

        $o = new WirelessLinks();
        $result = $o->deleteList(
            options: [[ 'id' => $link->id ]]
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
        $o = new WirelessLinks();

        return $o->postDetail( 
            interface_a: $_ENV['interfaceA']->id,
            interface_b: $_ENV['interfaceB']->id,
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new WirelessLinks();

        return $o->deleteDetail( id: $id  );
    }



/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
    public static function setupTest()
    {
        $_ENV['siteA']     = self::createSite();
        $_ENV['siteB']     = self::createSite();
        $_ENV['manf']      = self::createManufacturer();
        $_ENV['tenant']    = self::createTenant();
        $_ENV['devtype']   = self::createDeviceType( manf: $_ENV['manf'] );
        $_ENV['locationA'] = self::createLocation( site: $_ENV['siteA'] );
        $_ENV['locationB'] = self::createLocation( site: $_ENV['siteB'] );
        $_ENV['devrole']   = self::createDeviceRole();
        $_ENV['vcA']       = self::createVirtualChassis();
        $_ENV['vcB']       = self::createVirtualChassis();
        $_ENV['rackA']     = self::createRack( 
            site: $_ENV['siteA'], location: $_ENV['locationA'] 
        );
        $_ENV['rackB']     = self::createRack( 
            site: $_ENV['siteB'], location: $_ENV['locationB'] 
        );
        $_ENV['deviceA']   = self::createDevice(
                       site: $_ENV['siteA'],
                     tenant: $_ENV['tenant'],
                 devicetype: $_ENV['devtype'],
                 devicerole: $_ENV['devrole'],
            virtual_chassis: $_ENV['vcA'],
                       rack: $_ENV['rackA']
        );

        $_ENV['deviceB']   = self::createDevice(
                       site: $_ENV['siteB'],
                     tenant: $_ENV['tenant'],
                 devicetype: $_ENV['devtype'],
                 devicerole: $_ENV['devrole'],
            virtual_chassis: $_ENV['vcB'],
                       rack: $_ENV['rackB']
        );
        $_ENV['interfaceA'] = self::createInterface(
            device: $_ENV['deviceA']
        );
        $_ENV['interfaceB'] = self::createInterface(
            device: $_ENV['deviceB']
        );
    }

/**
* @afterClass
*/
    public static function closeTest()
    {
        self::destroyInterface( interface: $_ENV['interfaceB'] );
        self::destroyInterface( interface: $_ENV['interfaceA'] );
        self::destroyDevice( device: $_ENV['deviceB'] );
        self::destroyDevice( device: $_ENV['deviceA'] );
        self::destroyRack( rack: $_ENV['rackB'] );
        self::destroyRack( rack: $_ENV['rackA'] );
        self::destroyVirtualChassis( chassis: $_ENV['vcB'] );
        self::destroyVirtualChassis( chassis: $_ENV['vcA'] );
        self::destroyDeviceRole( devrole: $_ENV['devrole'] );
        self::destroyLocation( location: $_ENV['locationB'] );
        self::destroyLocation( location: $_ENV['locationA'] );
        self::destroyDeviceType( devtype: $_ENV['devtype'] );
        self::destroyTenant( tenant: $_ENV['tenant'] );
        self::destroyManufacturer( manf: $_ENV['manf'] );
        self::destroySite( site: $_ENV['siteB'] );
        self::destroySite( site: $_ENV['siteA'] );

        unset( $_ENV['rackA'] );
        unset( $_ENV['rackB'] );
        unset( $_ENV['vcB'] );
        unset( $_ENV['vcA'] );
        unset( $_ENV['locationA'] );
        unset( $_ENV['locationB'] );
        unset( $_ENV['devtype'] );
        unset( $_ENV['tenant'] );
        unset( $_ENV['manf'] );
        unset( $_ENV['siteA'] );
        unset( $_ENV['siteB'] );
        unset( $_ENV['deviceB'] );
        unset( $_ENV['deviceA'] );
        unset( $_ENV['interfaceB'] );
        unset( $_ENV['interfaceA'] );
    }
}