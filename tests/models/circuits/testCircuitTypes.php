<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\Circuits\CircuitTypes AS Options;

require_once __DIR__ . '/../testCore.php';

class testCircuitTypes extends testCore
{
    public Options $options;

    public function __construct()
    {
        parent::__construct();
        $this->options = new Options();
        $this->options->name        = 'PHPUnit_CType';
        $this->options->slug        = 'PHPUnit_CType';
        $this->options->description = 'PHPUnit_CType';

    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new CircuitTypes();
        $type = $o->options();

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsObject( $type['body'] );
    }




/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTypes();
        $type = $o->getDetail( id: $term->id );
        
        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsObject( $type['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTypes();
        $type = $o->getList();

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsObject( $type['body'] );
        $this->assertIsArray( $type['body']->results );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new CircuitTypes();
        $type = $this->postDetail();

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 201, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsObject( $type['body'] );

        //CLEAN UP
        $test = $this->deleteDetail( $type['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new CircuitTypes();

        $type = $o->postList( options: [ $this->options ] );

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 201, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsArray( $type['body'] );

        //CLEAN UP
        foreach( $type['body'] AS $term )
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

        $o = new CircuitTypes();
        $type = $o->putDetail( 
                 id: $term->id, 
               name: 'PHPUnit_CType', 
               slug: 'PHPUnit_CType',
            options: $this->options
        );
        
        
        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsObject( $type['body'] );

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

        $o = new CircuitTypes();
        $type = $o->putList(
            options: [ $this->options ]
        );
        
        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsArray( $type['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTypes();
        $type = $o->patchDetail(
                 id: $term->id,
               name: 'PHPUnit_CType',
               slug: 'PHPUnit_CType',
            options: $this->options
        );

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsObject( $type['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        $this->options->id = $term->id;

        $o = new CircuitTypes();
        $type = $o->patchList(
            options: [ $this->options ]
        );

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 200, $type['status'] );
        $this->assertIsArray( $type['headers'] );
        $this->assertIsArray( $type['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        
        $o = new CircuitTypes();
        $type = $o->deleteDetail( id: $term->id );

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 204, $type['status'] );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTypes();
        $type = $o->deleteList(
            options: [[ 'id' => $term->id ]]
        );

        $this->assertIsArray( $type );
        $this->assertArrayHasKey( 'status',  $type );
        $this->assertArrayHasKey( 'headers', $type );
        $this->assertArrayHasKey( 'body',    $type );
        $this->assertIsInt( $type['status'] );
        $this->assertEquals( 204, $type['status'] );
    }


/* CREATE A SITE
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new CircuitTypes();

        return $o->postDetail( 
               name: 'PHPUnit_CType',
               slug: 'PHPUnit_CType',
            options: $this->options
        );
    }



/* DELETE A RIR
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new CircuitTypes();

        return $o->deleteDetail( id: $id  );
    }


    public function setUp() : void
    {
        $this->options = new Options();
        $this->options->name = 'PHPUnit_CType';
        $this->options->slug = 'PHPUnit_CType';
    }
}