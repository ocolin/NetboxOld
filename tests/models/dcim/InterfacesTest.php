<?php 

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Data\DCIM\Interfaces AS Data;

require_once __DIR__ . '/../testCore.php';

final class InterfacesTest extends testCore
{
    public static object $devrole;
    public static object $devtype;
    public static object $manf;
    public static object $site;
    public static object $device;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new Interfaces();
        $result = $o->options();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */
 
    public function testPostDetail() : int
    {
        $o = new Interfaces();
        $d = new Data();
        $d->name = 'PHPUnit_Interface-Post';
        $d->device = self::$device->id;
        $d->type = 'ieee802.11ac';
        $result = $o->postDetail( data: $d, params: [ 'exclude' => 'config_context'] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        return $result->body->id;
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */
 
    public function testGetList() : void
    {
        $o = new Interfaces();
        $result = $o->getList( params: [ 'exclude' => 'config_context'] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertIsArray( $result->body->results );
    }
 


/* TEST GET DETAIL
---------------------------------------------------------------------------- */
 
/**
 * @depends testPostDetail
 */

    public function testGetDetail( int $id ) : void
    {
        $o = new Interfaces();
        $result = $o->getDetail( id: $id, params: [ 'exclude' => 'config_context'] );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }
  


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */
 
/**
 * @depends testPostDetail
 */

    public function testPutDetail( int $id ) : void
    {
        $o = new Interfaces();
        $d = new Data();
        $d->name = 'PHPUnit_Interface-Put';
        $d->device = self::$device->id;
        $d->type = 'ieee802.11ac';
        $result = $o->putDetail( id: $id, data: $d, params: [ 'exclude' => 'config_context'] );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }
 


/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */
  
/**
 * @depends testPostDetail
 */

    public function testPatchDetail( int $id ) : void
    {
        $o = new Interfaces();
        $d = new Data();
        $d->name = 'PHPUnit_Interface-Patch';
        $d->device = self::$device->id;
        $d->type = 'ieee802.11ac';
        $result = $o->patchDetail( id: $id, data: $d, params: [ 'exclude' => 'config_context'] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }
 



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */
 
/**
 * @depends testPostDetail
 */

    public function testDeleteDetail( int $id ) : void
    {
        $o = new Interfaces();
        $result = $o->deleteDetail( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 


/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$site     = self::createSite();
        self::$manf     = self::createManufacturer(); 
        self::$devtype  = self::createDeviceType( manf: self::$manf );
        self::$devrole  = self::createDeviceRole();
        self::$device   = self::createDevice(
                       site: self::$site,
                 devicetype: self::$devtype,
                 devicerole: self::$devrole,
        );
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyDevice( device: self::$device );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$site );
        sleep(1);
    }
      

/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new Interfaces();

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
        foreach( $result->body AS $interface )
        {
            $this->deleteDetail( id: $interface->id );
        }
    }
 */



/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $interface = $this->postDetail()->body;
        $this->options->id = $interface->id;

        $o = new Interfaces();
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
        $this->deleteDetail( $interface->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $interface = $this->postDetail()->body;
        $this->options->id = $interface->id;

        $o = new Interfaces();
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
        $this->deleteDetail( $interface->id );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $interface = $this->postDetail()->body;

        $o = new Interfaces();
        $result = $o->deleteList(
            options: [[ 'id' => $interface->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */
}