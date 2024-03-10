<?php 

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\RearPorts AS Options;

require_once __DIR__ . '/../testCore.php';

final class RearPortsTest extends testCore
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
    public static $device;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new RearPorts();
        $result = $o->options();

        $this->assertIsObject(     $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt(        $result->status );
        $this->assertEquals(       200, $result->status );
        $this->assertIsArray(      $result->headers );
        $this->assertIsObject(     $result->body );
    }


/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $port = $this->postDetail()->body;

        $o = new RearPorts();
        $result = $o->getDetail( id: $port->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $port->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $port = $this->postDetail()->body;

        $o = new RearPorts();
        $result = $o->getList();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertIsArray( $result->body->results );

        // CLEAN UP
        $this->deleteDetail( $port->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new RearPorts();
        $result = $this->postDetail();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        //CLEAN UP
        $this->deleteDetail( $result->body->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new RearPorts();

        $result = $o->postList( options: [ $this->options ] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $port )
        {
            $this->deleteDetail( id: $port->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $port = $this->postDetail()->body;

        $o = new RearPorts();
        $result = $o->putDetail( 
                id: $port->id, 
              name: 'PHPUnit_RearPort',
            device: self::$device->id,
              type: '8p8c'                
        );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $port->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $port = $this->postDetail()->body;
        $this->options->id = $port->id;

        $o = new RearPorts();
        $result = $o->putList( options: [ $this->options ] );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $port->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $port = $this->postDetail()->body;

        $o = new RearPorts();
        $result = $o->patchDetail(
                id: $port->id, 
              name: 'PHPUnit_RearPort',
            device: self::$device->id,
              type: '8p8c'
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $port->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $port = $this->postDetail()->body;
        $this->options->id = $port->id;

        $o = new RearPorts();
        $result = $o->patchList( options: [ $this->options ] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $port->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $port = $this->postDetail()->body;
        
        $o = new RearPorts();
        $result = $o->deleteDetail( id: $port->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $port = $this->postDetail()->body;

        $o = new RearPorts();
        $result = $o->deleteList(
            options: [[ 'id' => $port->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */

    public function postDetail() : Response
    {
        $o = new RearPorts();

        return $o->postDetail( 
              name: 'PHPUnit_RearPort',
            device: self::$device->id,
              type: '8p8c'
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new RearPorts();

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
        self::$device   = self::createDevice(
                       site: self::$site,
                     tenant: self::$tenant,
                 devicetype: self::$devtype,
                 devicerole: self::$devrole,
            virtual_chassis: self::$vc,
                       rack: self::$rack
        );
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyDevice( device: self::$device );
        self::destroyRack( rack: self::$rack );
        self::destroyVirtualChassis( chassis: self::$vc );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyLocation( location: self::$location );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyTenant( tenant: self::$tenant );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$site );
        sleep(1);
    }
    
/*
---------------------------------------------------------------------------- */
        
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name    = 'PHPUnit_RearPort-' . $rand;
        $this->options->device  = self::$device->id;
        $this->options->type    = '8p8c';
    }
}