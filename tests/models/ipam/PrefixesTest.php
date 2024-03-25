<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Data\IPAM\Prefixes AS Data;

require_once __DIR__ . '/../testCore.php';

final class PrefixesTest extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }


/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new Prefixes();
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
        $o = new Prefixes();
        $d = new Data();
        $d->prefix = '192.168.1.0/24';
        $d->description = 'PHPUnit_IpRangeAvaIPs-Post';
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
 * @depends testPostDetail
 */

public function testGetDetail( int $id ) : void
{
    $o = new Prefixes();
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
    $o = new Prefixes();
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
 * @depends testPostDetail
 */

    public function testPutDetail( int $id ) : void
    {
        $o = new Prefixes();
        $d = new Data();
        $d->prefix = '192.168.1.0/24';
        $d->description = 'PHPUnit_IpRangeAvaIPs-Put';
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
        $o = new Prefixes();
        $d = new Data();
        $d->description = 'PHPUnit_IpRangeAvaIPs-Patch';
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
        $o = new Prefixes();
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

    public static function tearDownAfterClass() : void
    {
        sleep(1);
    }

/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new Prefixes();
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
        foreach( $result->body AS $prefix )
        {
            $this->deleteDetail( id: $prefix->id );
        }
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $prefix = $this->postDetail()->body;
        $this->options->id = $prefix->id;

        $o = new Prefixes();
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
        $this->deleteDetail( $prefix->id );
    }
 */



/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $prefix = $this->postDetail()->body;
        $this->options->id = $prefix->id;

        $o = new Prefixes();
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
        $this->deleteDetail( $prefix->id );
    }
 */



/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $prefix = $this->postDetail()->body;

        $o = new Prefixes();
        $result = $o->deleteList(
            options: [[ 'id' => $prefix->id ]]
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