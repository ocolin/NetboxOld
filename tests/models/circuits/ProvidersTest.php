<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\Circuits\Providers AS Options;

require_once __DIR__ . '/../testCore.php';

final class ProvidersTest extends testCore
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
        $o = new Providers();
        $prvder = $o->options();

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );
    }




/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->getDetail( id: $term->id );
        
        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->getList();

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );
        $this->assertIsArray( $prvder['body']->results );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Providers();
        $prvder = $this->postDetail();

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 201, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );

        //CLEAN UP
        $test = $this->deleteDetail( $prvder['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new Providers();
        $prvder = $o->postList( options: [ $this->options ] );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 201, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsArray( $prvder['body'] );

        //CLEAN UP
        foreach( $prvder['body'] AS $term )
        {
            $this->deleteDetail( id: $term->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->putDetail( 
                 id: $term->id, 
               name: 'PHPUnit_Prvder', 
               slug: 'PHPUnit_Prvder',
            options: $this->options
        );
        
        
        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        $this->options->id = $term->id;

        $o = new Providers();
        $prvder = $o->putList( options: [ $this->options ] );
        
        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsArray( $prvder['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->patchDetail(
                 id: $term->id,
               name: 'PHPUnit_Prvder',
               slug: 'PHPUnit_Prvder',
            options: $this->options
        );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );


        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        //$options = $this->options();
        $this->options->id = $term->id;

        $o = new Providers();
        $prvder = $o->patchList(
            options: [ $this->options ]
        );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsArray( $prvder['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        
        $o = new Providers();
        $prvder = $o->deleteDetail( id: $term->id );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 204, $prvder['status'] );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->deleteList(
            options: [[ 'id' => $term->id ]]
        );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 204, $prvder['status'] );
    }


/* CREATE A PROVIDER
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new Providers();
        //$options = $this->options();

        return $o->postDetail( 
               name: 'PHPUnit_Prvder',
               slug: 'PHPUnit_Prvder',
            options: $this->options
        );
    }



/* DELETE A PROVIDER
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Providers();

        return $o->deleteDetail( id: $id  );
    }


    public function setUp() : void
    {
        $this->options = new Options();
        $this->options->name        = 'PHPUnit_Prvder';
        $this->options->slug        = 'PHPUnit_Prvder';
        $this->options->description = 'PHPUnit_Prvder';
    }

}