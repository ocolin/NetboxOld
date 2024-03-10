<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\Regions AS Options;

require_once __DIR__ . '/../testCore.php';

final class RegionsTest extends testCore
{
    public Options $options;

    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new Regions();
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




/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $region = $this->postDetail()->body;

        $o = new Regions();
        $result = $o->getDetail( id: $region->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $region->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $region = $this->postDetail()->body;

        $o = new Regions();
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
        $this->deleteDetail( $region->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Regions();
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
        $test = $this->deleteDetail( $result->body->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new Regions();

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
        foreach( $result->body AS $region )
        {
            $this->deleteDetail( id: $region->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $region = $this->postDetail()->body;

        $o = new Regions();
        $result = $o->putDetail( 
              id: $region->id, 
            name: 'updateRegion', 
            slug: 'updateRegion',
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
        $this->deleteDetail( $region->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $region = $this->postDetail()->body;
        $this->options->id   = $region->id;

        $o = new Regions();
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
        $this->deleteDetail( $region->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $region = $this->postDetail()->body;

        $o = new Regions();
        $result = $o->patchDetail(
              id: $region->id,
            name: 'patchRegion',
            slug: 'patchRegion',
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
        $this->deleteDetail( $region->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $region = $this->postDetail()->body;
        $this->options->id   = $region->id;

        $o = new Regions();
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
        $this->deleteDetail( $region->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $region = $this->postDetail()->body;
        
        $o = new Regions();
        $result = $o->deleteDetail( id: $region->id );

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
        $region = $this->postDetail()->body;

        $o = new Regions();
        $result = $o->deleteList(
            options: [[ 'id' => $region->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }


/* CREATE A REGION
---------------------------------------------------------------------------- */

    public function postDetail() : Response
    {
        $o = new Regions();

        return $o->postDetail( 
            name: 'testRegion',
            slug: 'testRegion',
        );
    }



/* DELETE A REGION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new Regions();

        return $o->deleteDetail( id: $id  );
    }
    
/*
---------------------------------------------------------------------------- */
        
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name = 'PHPUnit_Region-' . $rand;
        $this->options->slug = 'PHPUnit_Region-' . $rand;
    }

}