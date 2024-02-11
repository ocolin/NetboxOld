<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Options\DCIM\Devices AS Options;

require_once __DIR__ . '/../testCore.php';

final class DevicesTest extends testCore
{
    public Options $options;
    public static $vc;
    public static $rack;
    public static $devrole;
    public static $location;
    public static $devtype;
    public static $manf;
    public static $site;
    public static $tenant;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
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
        $this->assertIsArray( $result['body']->results );

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

        //CLEAN UP
        $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new Devices();

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
                device_type: self::$devtype->id,
                device_role: self::$devrole->id,
                     tenant: self::$tenant->id,
                       site: self::$site->id,
                       rack: self::$rack->id,
            virtual_chassis: self::$vc->id,
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

        // CLEAN UP
        $this->deleteDetail( $device->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];
        $this->options->id = $device->id;

        $o = new Devices();
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
                device_type: self::$devtype->id,
                device_role: self::$devrole->id,
                     tenant: self::$tenant->id,
                       site: self::$site->id,
                       rack: self::$rack->id,
            virtual_chassis: self::$vc->id,
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

        // CLEAN UP
        $this->deleteDetail( $device->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $device = $this->postDetail()['body'];
        $this->options->id = $device->id;

        $o = new Devices();
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
                device_type: self::$devtype->id,
                device_role: self::$devrole->id,
                     tenant: self::$tenant->id,
                       site: self::$site->id,
                       rack: self::$rack->id,
            virtual_chassis: self::$vc->id,
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

    public static function setUpBeforeClass() : void
    {
        self::$site     = self::createSite();
        self::$manf     = self::createManufacturer();
        self::$tenant   = self::createTenant();
        self::$devtype  = self::createDeviceType( manf: self::$manf );
        self::$location = self::createLocation( site: self::$site );
        self::$devrole  = self::createDeviceRole();
        self::$vc       = self::createVirtualChassis();
        self::$rack     = self::createRack( 
            site: self::$site, location: self::$location 
        );
    }

    public static function tearDownAfterClass() : void
    {

        self::destroyRack( rack: self::$rack );
        self::destroyVirtualChassis( chassis: self::$vc );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyLocation( location: self::$location );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyTenant( tenant: self::$tenant );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$site );
    }
        
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name            = 'PHPUnit_Device-' . $rand;
        $this->options->face            = 'front';
        $this->options->device_type     = self::$devtype->id;
        $this->options->device_role     = self::$devrole->id;
        $this->options->tenant          = self::$tenant->id;
        $this->options->site            = self::$site->id;
        $this->options->rack            = self::$rack->id;
        $this->options->virtual_chassis = self::$vc->id;
        $this->options->vc_position     = 1;
    }
}