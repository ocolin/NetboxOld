<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testRackRoles extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new RackRoles();
        $result = $o->options();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'name', $result['body'] );
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

public function testGetDetail() : void
{
    // SETUP
    $role = $this->postDetail()['body'];

    $o = new RackRoles();
    $result = $o->getDetail( id: $role->id );
    
    $this->assertIsArray( $result );
    $this->assertArrayHasKey( 'status',  $result );
    $this->assertArrayHasKey( 'headers', $result );
    $this->assertArrayHasKey( 'body',    $result );
    $this->assertIsInt( $result['status'] );
    $this->assertEquals( 200, $result['status'] );
    $this->assertIsArray( $result['headers'] );
    $this->assertIsObject( $result['body'] );
    $this->assertObjectHasAttribute( 'id', $result['body'] );

    // CLEAN UP
    $this->deleteDetail( $role->id );
}



/* TEST GET LIST
---------------------------------------------------------------------------- */

public function testGetList() : void
{
    // SETUP
    $role = $this->postDetail()['body'];

    $o = new RackRoles();
    $result = $o->getList();

    $this->assertIsArray( $result );
    $this->assertArrayHasKey( 'status',  $result );
    $this->assertArrayHasKey( 'headers', $result );
    $this->assertArrayHasKey( 'body',    $result );
    $this->assertIsInt( $result['status'] );
    $this->assertEquals( 200, $result['status'] );
    $this->assertIsArray( $result['headers'] );
    $this->assertIsObject( $result['body'] );
    $this->assertObjectHasAttribute( 'results', $result['body'] );
    $this->assertIsArray( $result['body']->results );
    $this->assertObjectHasAttribute( 'id', $result['body']->results[0] );

     // CLEAN UP
     $this->deleteDetail( $role->id );
}



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new RackRoles();
        $result = $this->postDetail();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );

        //CLEAN UP
        $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new RackRoles();
        $result = $o->postList(
        data: [
            [ 'name' => 'testRackRoles1', 'slug' => 'aaa' ],
            [ 'name' => 'testRackRoles2', 'slug' => 'bbb' ],
        ]  
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        //CLEAN UP
        foreach( $result['body'] AS $role )
        {
            $this->deleteDetail( id: $role->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $role = $this->postDetail()['body'];

        $o = new RackRoles();
        $result = $o->putDetail( 
              id: $role->id, 
            name: 'updateRackRoles', 
            slug: 'updateRackRoles',
            data: [ 'description' => 'Updated description' ]
        );
        
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $role->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $role = $this->postDetail()['body'];

        $o = new RackRoles();
        $result = $o->putList(
            data: [
                [ 
                           'id'   => $role->id, 
                           'name' => 'putRackRoles',
                           'slug' => 'putRackRoles',
                    'description' => 'Updated description'
                ]
            ]
        );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'][0] );

        // CLEAN UP
        $this->deleteDetail( $role->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $role = $this->postDetail()['body'];

        $o = new RackRoles();
        $result = $o->patchDetail(
              id: $role->id,
            name: 'patchRackRoles',
            slug: 'patchRackRoles',
            data: [ 'description' => 'zzz' ]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );


        // CLEAN UP
        $this->deleteDetail( $role->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $role = $this->postDetail()['body'];

        $o = new RackRoles();
        $result = $o->patchList(
            data: [
                [ 
                          'id' => $role->id, 
                        'name' => 'patchRackRoles',
                        'slug' => 'patchRackRoles',
                 'description' => 'patchRackRoles' 
                ]
            ]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'][0] );

        // CLEAN UP
        $this->deleteDetail( $role->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $role = $this->postDetail()['body'];
        
        $o = new RackRoles();
        $result = $o->deleteDetail( id: $role->id );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $role = $this->postDetail()['body'];

        $o = new RackRoles();
        $result = $o->deleteList(
            data: [[ 'id' => $role->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }


/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new RackRoles();

        return $o->postDetail( 
            name: 'testRackRoles',
            slug: 'testRackRoles',
            data: [ 
                'description' => 'PHPUnit test RackRoles',
            ]
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new RackRoles();

        return $o->deleteDetail( id: $id  );
    }

}