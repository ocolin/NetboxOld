<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Virtualization;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Virtualization\ClusterTypes AS Options;

require_once __DIR__ . '/../testCore.php';

final class ClusterTypesTest extends testCore
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
        $o = new ClusterTypes();
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
        $type = $this->postDetail()->body;

        $o = new ClusterTypes();
        $result = $o->getDetail( id: $type->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $type->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $type = $this->postDetail()->body;

        $o = new ClusterTypes();
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
        $this->deleteDetail( $type->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new ClusterTypes();
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
        $o = new ClusterTypes();
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
        foreach( $result->body AS $type )
        {
            $this->deleteDetail( id: $type->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $type = $this->postDetail()->body;

        $o = new ClusterTypes();
        $result = $o->putDetail( 
              id: $type->id, 
            name: 'PHPUnit_ClusterType',
            slug: 'PHPUnit_ClusterType'
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
        $this->deleteDetail( $type->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $type = $this->postDetail()->body;
        $this->options->id = $type->id;

        $o = new ClusterTypes();
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
        $this->deleteDetail( $type->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $type = $this->postDetail()->body;

        $o = new ClusterTypes();
        $result = $o->patchDetail(
              id: $type->id,
            name: 'PHPUnit_ClusterType',
            slug: 'PHPUnit_ClusterType'
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
        $this->deleteDetail( $type->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $type = $this->postDetail()->body;
        $this->options->id = $type->id;

        $o = new ClusterTypes();
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
        $this->deleteDetail( $type->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $type = $this->postDetail()->body;
        
        $o = new ClusterTypes();
        $result = $o->deleteDetail( id: $type->id );

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
        $type = $this->postDetail()->body;

        $o = new ClusterTypes();
        $result = $o->deleteList(
            options: [[ 'id' => $type->id ]]
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
        $o = new ClusterTypes();

        return $o->postDetail( 
            name: 'PHPUnit_ClusterType',
            slug: 'PHPUnit_ClusterType'
        );
    }



/* DELETE A REGION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new ClusterTypes();

        return $o->deleteDetail( id: $id  );
    }

    
/*
---------------------------------------------------------------------------- */

    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name = 'PHPUnit_ClusterType-' . $rand;
        $this->options->slug = 'PHPUnit_ClusterType-' . $rand;
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        sleep(2);
    }
}