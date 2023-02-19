<?php 

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\Wireless\WirelessLinks AS Options;

require_once __DIR__ . '/../testCore.php';

class testWirelessLinks extends testCore
{
    public Options $options;
    public static $interfaceA;
    public static $interfaceB;
    public static $deviceA;
    public static $deviceB;
    public static $rackA;
    public static $rackB;
    public static $vcA;
    public static $vcB;
    public static $locationA;
    public static $locationB;
    public static $siteA;
    public static $siteB;
    public static $devtype;
    public static $manf;
    public static $tenant;
    public static $devrole;

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
        $this->assertIsArray( $result['body']->results );

        // CLEAN UP
        $this->deleteDetail( $link->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        //$o = new WirelessLinks();
        $result = $this->postDetail();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        //CLEAN UP
        $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new WirelessLinks();
        $result = $o->postList( options: [ $this->options ] );

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
            interface_a: self::$interfaceA->id,
            interface_b: self::$interfaceB->id,               
        );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $link->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];
        $this->options->id = $link->id;

        $o = new WirelessLinks();
        $result = $o->putList( options: [ $this->options ] );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

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
            interface_a: self::$interfaceA->id,
            interface_b: self::$interfaceB->id,
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $link->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $link = $this->postDetail()['body'];
        $this->options->id = $link->id;

        $o = new WirelessLinks();
        $result = $o->patchList( options: [ $this->options ] );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

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
            interface_a: self::$interfaceA->id,
            interface_b: self::$interfaceB->id,
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

    public static function setUpBeforeClass() : void
    {
        self::$siteA     = self::createSite();
        self::$siteB     = self::createSite();
        self::$manf      = self::createManufacturer();
        self::$tenant    = self::createTenant();
        self::$devtype   = self::createDeviceType( manf: self::$manf );
        self::$locationA = self::createLocation( site: self::$siteA );
        self::$locationB = self::createLocation( site: self::$siteB );
        self::$devrole   = self::createDeviceRole();
        self::$vcA       = self::createVirtualChassis();
        self::$vcB       = self::createVirtualChassis();
        self::$rackA     = self::createRack( 
            site: self::$siteA, location: self::$locationA 
        );
        self::$rackB     = self::createRack( 
            site: self::$siteB, location: self::$locationB 
        );
        self::$deviceA   = self::createDevice(
                       site: self::$siteA,
                     tenant: self::$tenant,
                 devicetype: self::$devtype,
                 devicerole: self::$devrole,
            virtual_chassis: self::$vcA,
                       rack: self::$rackA
        );

        self::$deviceB   = self::createDevice(
                       site: self::$siteB,
                     tenant: self::$tenant,
                 devicetype: self::$devtype,
                 devicerole: self::$devrole,
            virtual_chassis: self::$vcB,
                       rack: self::$rackB
        );
        self::$interfaceA = self::createInterface(
            device: self::$deviceA
        );
        self::$interfaceB = self::createInterface(
            device: self::$deviceB
        );
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyInterface( interface: self::$interfaceB );
        self::destroyInterface( interface: self::$interfaceA );
        self::destroyDevice( device: self::$deviceB );
        self::destroyDevice( device: self::$deviceA );
        self::destroyRack( rack: self::$rackB );
        self::destroyRack( rack: self::$rackA );
        self::destroyVirtualChassis( chassis: self::$vcB );
        self::destroyVirtualChassis( chassis: self::$vcA );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyLocation( location: self::$locationB );
        self::destroyLocation( location: self::$locationA );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyTenant( tenant: self::$tenant );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$siteB );
        self::destroySite( site: self::$siteA );
    }

    public function setUp() : void
    {
        $this->options = new Options();
        $this->options->interface_a = self::$interfaceA->id;
        $this->options->interface_b = self::$interfaceB->id;
    }
}