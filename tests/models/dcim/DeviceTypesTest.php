<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Data\DCIM\DeviceTypes AS Data;

require_once __DIR__ . '/../testCore.php';

final class DeviceTypesTest extends testCore
{
    public static object $manf;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new DeviceTypes();
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
        $o = new DeviceTypes();
        $d = new Data();
        $d->model = 'testDeviceType';
        $d->slug = 'testDeviceType';
        $d->manufacturer = self::$manf->id;
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



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

/**
 *  @depends testPostDetail
 */

    public function testGetDetail( int $id ) : void
    {
        $o = new DeviceTypes();
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



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        $o = new DeviceTypes();
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


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

/**
 *  @depends testPostDetail
 */

    public function testPutDetail( int $id ) : void
    {
        $o = new DeviceTypes();
        $d = new Data();
        $d->model = 'testDeviceTypePut';
        $d->slug = 'testDeviceTypePut';
        $d->manufacturer = self::$manf->id;
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
 *  @depends testPostDetail
 */

    public function testPatchDetail( int $id ) : void
    {
        $o = new DeviceTypes();
        $d = new Data();
        $d->model = 'testDeviceTypePatch';
        $d->slug = 'testDeviceTypePatch';
        $d->manufacturer = self::$manf->id;
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
 *  @depends testPostDetail
 */

    public function testDeleteDetail( int $id ) : void
    {
        $o = new DeviceTypes();
        $result = $o->deleteDetail( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }


/*
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$manf = self::createManufacturer();
    }
    
    
/*
---------------------------------------------------------------------------- */

 
    public static function tearDownAfterClass() : void
    {
        self::destroyManufacturer( self::$manf );
        sleep(1);
    }
    


/* TEST POST LIST
---------------------------------------------------------------------------- */
/*
    public function testPostList() :void
    {
        $o = new DeviceTypes();

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
        foreach( $result->body AS $devtype )
        {
            $this->deleteDetail( id: $devtype->id );
        }
    }
*/



/* TEST PUT LIST
---------------------------------------------------------------------------- */
/*
    public function testPutList() : void
    {
        // SETUP
        $devtype = $this->postDetail()->body;
        $this->options->id = $devtype->id;

        $o = new DeviceTypes();
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
        $this->deleteDetail( $devtype->id );
    }
*/



/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/*
    public function testPatchList() : void
    {
        // SETUP
        $devtype = $this->postDetail()->body;
        $this->options->id = $devtype->id;

        $o = new DeviceTypes();
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
        $this->deleteDetail( $devtype->id );
    }
*/



/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/*
    public function testDeleteList() : void
    {
        // SETUP
        $devtype = $this->postDetail()->body;

        $o = new DeviceTypes();
        $result = $o->deleteList(
            options: [[ 'id' => $devtype->id ]]
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