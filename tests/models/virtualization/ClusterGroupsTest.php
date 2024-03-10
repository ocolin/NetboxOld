<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Virtualization;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Virtualization\ClusterGroups AS Options;

require_once __DIR__ . '/../testCore.php';

final class ClusterGroupsTest extends testCore
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
        $o = new ClusterGroups();
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
        $group = $this->postDetail()->body;

        $o = new ClusterGroups();
        $result = $o->getDetail( id: $group->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $group->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $group = $this->postDetail()->body;

        $o = new ClusterGroups();
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
        $this->deleteDetail( $group->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new ClusterGroups();
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
        $o = new ClusterGroups();
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
        foreach( $result->body AS $group )
        {
            $this->deleteDetail( id: $group->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $group = $this->postDetail()->body;

        $o = new ClusterGroups();
        $result = $o->putDetail( 
              id: $group->id, 
            name: 'PHPUnit_ClusterGrp',
            slug: 'PHPUnit_ClusterGrp'
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
        $this->deleteDetail( $group->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $group = $this->postDetail()->body;
        $this->options->id = $group->id;

        $o = new ClusterGroups();
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
        $this->deleteDetail( $group->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $group = $this->postDetail()->body;

        $o = new ClusterGroups();
        $result = $o->patchDetail(
              id: $group->id,
            name: 'PHPUnit_ClusterGrp',
            slug: 'PHPUnit_ClusterGrp'
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
        $this->deleteDetail( $group->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $group = $this->postDetail()->body;
        $this->options->id = $group->id;

        $o = new ClusterGroups();
        $result = $o->patchList(
            options: [
                [ 
                    'id'   => $group->id,
                    'name' => 'PHPUnit_ClusterGrp',
                    'slug' => 'PHPUnit_ClusterGrp'
                ]
            ]
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
        $this->deleteDetail( $group->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $group = $this->postDetail()->body;
        
        $o = new ClusterGroups();
        $result = $o->deleteDetail( id: $group->id );

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
        $group = $this->postDetail()->body;

        $o = new ClusterGroups();
        $result = $o->deleteList(
            options: [[ 'id' => $group->id ]]
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
        $o = new ClusterGroups();

        return $o->postDetail( 
            name: 'PHPUnit_ClusterGrp',
            slug: 'PHPUnit_ClusterGrp'
        );
    }



/* DELETE A REGION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new ClusterGroups();

        return $o->deleteDetail( id: $id  );
    }

    
/*
---------------------------------------------------------------------------- */

    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name = 'PHPUnit_ClusterGrp-' . $rand;
        $this->options->slug = 'PHPUnit_ClusterGrp-' . $rand;
    }

    public static function tearDownAfterClass() : void
    {
        sleep(1);
    }

}