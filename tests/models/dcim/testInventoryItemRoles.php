<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testInventoryItemRoles extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new InventoryItemRoles();
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

    $o = new InventoryItemRoles();
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

    $o = new InventoryItemRoles();
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
        $o = new InventoryItemRoles();
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
        $o = new InventoryItemRoles();
        $result = $o->postList(
        data: [
            [ 'name' => 'testInventoryItemRoles1', 'slug' => 'aaa' ],
            [ 'name' => 'testInventoryItemRoles2', 'slug' => 'bbb' ],
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

        $o = new InventoryItemRoles();
        $result = $o->putDetail( 
              id: $role->id, 
            name: 'updateInventoryItemRoles', 
            slug: 'updateInventoryItemRoles',
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

        $o = new InventoryItemRoles();
        $result = $o->putList(
            data: [
                [ 
                           'id'   => $role->id, 
                           'name' => 'putInventoryItemRoles',
                           'slug' => 'putInventoryItemRoles',
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

        $o = new InventoryItemRoles();
        $result = $o->patchDetail(
              id: $role->id,
            name: 'patchInventoryItemRoles',
            slug: 'patchInventoryItemRoles',
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

        $o = new InventoryItemRoles();
        $result = $o->patchList(
            data: [
                [ 
                          'id' => $role->id, 
                        'name' => 'patchInventoryItemRoles',
                        'slug' => 'patchInventoryItemRoles',
                 'description' => 'patchInventoryItemRoles' 
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
        
        $o = new InventoryItemRoles();
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

        $o = new InventoryItemRoles();
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
        $o = new InventoryItemRoles();

        return $o->postDetail( 
            name: 'testInventoryItemRoles',
            slug: 'testInventoryItemRoles',
            data: [ 
                'description' => 'PHPUnit test InventoryItemRoles',
            ]
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new InventoryItemRoles();

        return $o->deleteDetail( id: $id  );
    }

}