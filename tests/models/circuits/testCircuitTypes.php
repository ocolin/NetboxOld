<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\Circuits\CircuitTypes AS Options;

require_once __DIR__ . '/../testCore.php';

class testCircuitTypes extends testCore
{
    public function __construct()
    {
        parent::__construct();
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
        $options = new Options();
        $options->name = 'PHPUnit_CType1';
        $options->slug = 'PHPUnit_CType1';

        $o = new CircuitTypes();
        $type = $o->postList( options: [ $options ] );

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
        $options = new Options();
        $options->description = 'PHPUnit_CType';

        $o = new CircuitTypes();
        $type = $o->putDetail( 
                 id: $term->id, 
               name: 'PHPUnit_CType', 
               slug: 'PHPUnit_CType',
            options: $options
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
        $options = new Options();
        $options->description = 'PHPUnit_CType';
        $options->id = $term->id;
        $options->name = 'PHPUnit_CType';
        $options->slug = 'PHPUnit_CType';

        $o = new CircuitTypes();
        $type = $o->putList(
            options: [ $options ]
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
        $options = new Options();
        $options->description = 'PHPUnit_CType';

        $o = new CircuitTypes();
        $type = $o->patchDetail(
                 id: $term->id,
               name: 'PHPUnit_CType',
               slug: 'PHPUnit_CType',
            options: $options
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
        $options = new Options();
        $options->description = 'PHPUnit_CType';
        $options->id = $term->id;
        $options->name = 'PHPUnit_CType';
        $options->slug = 'PHPUnit_CType';

        $o = new CircuitTypes();
        $type = $o->patchList(
            options: [ $options ]
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
        $options = new Options();
        $options->description = 'PHPUnit_CType';

        return $o->postDetail( 
            name: 'PHPUnit_CType',
            slug: 'PHPUnit_CType',
            options: $options
        );
    }



/* DELETE A RIR
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new CircuitTypes();

        return $o->deleteDetail( id: $id  );
    }

}