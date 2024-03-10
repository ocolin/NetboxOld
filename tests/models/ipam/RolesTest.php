<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\IPAM\Roles AS Options;

require_once __DIR__ . '/../testCore.php';

final class RolesTest extends testCore
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
        $o = new Roles();
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
        $role = $this->postDetail()->body;

        $o = new Roles();
        $result = $o->getDetail( id: $role->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $role->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $role = $this->postDetail()->body;

        $o = new Roles();
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
        $this->deleteDetail( $role->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Roles();
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
        $o = new Roles();
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
        foreach( $result->body AS $role )
        {
            $this->deleteDetail( id: $role->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $role = $this->postDetail()->body;

        $o = new Roles();
        $result = $o->putDetail( 
                 id: $role->id, 
               name: 'updateRole', 
               slug: 'updateRole',
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
        $this->deleteDetail( $role->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $role = $this->postDetail()->body;
        $this->options->id = $role->id;

        $o = new Roles();
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
        $this->deleteDetail( $role->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $role = $this->postDetail()->body;

        $o = new Roles();
        $result = $o->patchDetail(
                 id: $role->id,
               name: 'patchRole',
               slug: 'patchRole',
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
        $this->deleteDetail( $role->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $role = $this->postDetail()->body;
        $this->options->id = $role->id;

        $o = new Roles();
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
        $this->deleteDetail( $role->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $role = $this->postDetail()->body;
        
        $o = new Roles();
        $result = $o->deleteDetail( id: $role->id );

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
        $role = $this->postDetail()->body;

        $o = new Roles();
        $result = $o->deleteList(
            options: [[ 'id' => $role->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }


/* CREATE A ROLE
---------------------------------------------------------------------------- */

    public function postDetail() : Response
    {
        $o = new Roles();

        return $o->postDetail( 
            name: 'testRole',
            slug: 'testRole',

        );
    }



/* DELETE A ROLE
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new Roles();

        return $o->deleteDetail( id: $id  );
    }


    
/*
---------------------------------------------------------------------------- */
                 
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name = 'PHPUnit_Role-' . $rand;
        $this->options->slug = 'PHPUnit_Role-' . $rand;
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        sleep(1);
    }
}