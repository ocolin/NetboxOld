<?php 

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Circuits;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Data\Circuits\Circuits AS Data;

require_once __DIR__ . '/../testCore.php';

final class CircuitsTest extends testCore
{
    public static $provider;
    public static $circuit_type;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new Circuits();
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
        $o = new Circuits();
        $d = new Data();
        $d->cid = 'PHPUnit_Circuit-Post';
        $d->provider = self::$provider->id;
        $d->type = self::$circuit_type->id;
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
        $o = new Circuits();
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
        $o = new Circuits();
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
        $o = new Circuits();
        $d = new Data();
        $d->cid = 'PHPUnit_Circuit-Put';
        $d->provider = self::$provider->id;
        $d->type = self::$circuit_type->id;
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
        $o = new Circuits();
        $d = new Data();
        $d->cid = 'PHPUnit_Circuit-Patch';
        $d->provider = self::$provider->id;
        $d->type = self::$circuit_type->id;
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
        $o = new Circuits();
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
        self::$provider = self::createProvider();
        self::$circuit_type = self::createCircuitType();
    }
    
/*
---------------------------------------------------------------------------- */

 
    public static function tearDownAfterClass() : void
    {
        self::destroyProvider( provider: self::$provider );
        self::destroyCircuitType( ct: self::$circuit_type );
        sleep(1);
    }


/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new Circuits();

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
        foreach( $result->body AS $circuit )
        {
            $this->deleteDetail( id: $circuit->id );
        }
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $circuit = $this->postDetail()->body;
        $this->options->id = $circuit->id;
        
        $o = new Circuits();
        $result = $o->putList(
            options: [ $this->options ]
        );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $circuit->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $circuit = $this->postDetail()->body;
        $this->options->id = $circuit->id;

        $o = new Circuits();
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
        $this->deleteDetail( $circuit->id );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $circuit = $this->postDetail()->body;

        $o = new Circuits();
        $result = $o->deleteList(
            options: [[ 'id' => $circuit->id ]]
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