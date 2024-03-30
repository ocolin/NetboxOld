<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Data\IPAM\Asns AS Data;

require_once __DIR__ . '/../testCore.php';

final class AsnsTest extends testCore
{
    public static object $rir;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new Asns();
        
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
        $o = new Asns();
        $d = new Data();
        $d->asn = 12345;
        $d->description = 'PHPUnit_Asns-Post';
        $d->rir = self::$rir->id;
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
        $o = new Asns();
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
        $o = new Asns();
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
        $o = new Asns();
        $d = new Data();
        $d->asn = 12345;
        $d->description = 'PHPUnit_Asns-Put';
        $d->rir = self::$rir->id;
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
        $o = new Asns();
        $d = new Data();
        $d->description = 'PHPUnit_Asns-Patch';
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
        $o = new Asns();
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
        $o = new Rirs();
        self::$rir = self::createRir();
    }


/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyRir( rir: self::$rir );
        sleep(1);
    }





/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new Asns();
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
        foreach( $result->body AS $asn )
        {
            $this->deleteDetail( id: $asn->id );
        }
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function Asns() : void
    {
        // SETUP
        $asn = $this->postDetail()->body;
        $this->options->id = $asn->id;

        $o = new Asns();
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
        $this->deleteDetail( $asn->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $asn = $this->postDetail()->body;
        $this->options->id = $asn->id;

        $o = new Asns();
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
        $this->deleteDetail( $asn->id );
    }
 */



/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $asn = $this->postDetail()->body;

        $o = new Asns();
        $result = $o->deleteList(
            options: [[ 'id' => $asn->id ]]
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