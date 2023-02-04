<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testProviders extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
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
        $this->assertObjectHasAttribute( 'name', $prvder['body'] );
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
        $this->assertObjectHasAttribute( 'id', $prvder['body'] );

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
        $this->assertObjectHasAttribute( 'results', $prvder['body'] );
        $this->assertIsArray( $prvder['body']->results );
        $this->assertObjectHasAttribute( 'id', $prvder['body']->results[0] );

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
        $this->assertObjectHasAttribute( 'id', $prvder['body'] );

        //CLEAN UP
        $test = $this->deleteDetail( $prvder['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new Providers();
        $prvder = $o->postList(
        options: [
            [ 'name' => 'PHPUnit_Prvder1', 'slug' => 'aaa' ],
            [ 'name' => 'PHPUnit_Prvder2', 'slug' => 'bbb' ],
        ]  
        );

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
            options: [ 'description' => 'Updated description' ]
        );
        
        
        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );
        $this->assertObjectHasAttribute( 'id', $prvder['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->putList(
            options: [
                [ 
                           'id'   => $term->id, 
                           'name' => 'PHPUnit_Prvder',
                           'slug' => 'PHPUnit_Prvder',
                    'description' => 'Updated description'
                ]
            ]
        );
        
        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsArray( $prvder['body'] );
        $this->assertObjectHasAttribute( 'id', $prvder['body'][0] );

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
            options: [ 'description' => 'zzz' ]
        );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsObject( $prvder['body'] );
        $this->assertObjectHasAttribute( 'id', $prvder['body'] );


        // CLEAN UP
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new Providers();
        $prvder = $o->patchList(
            options: [
                [ 
                          'id' => $term->id, 
                        'name' => 'PHPUnit_Prvder',
                        'slug' => 'PHPUnit_Prvder',
                 'description' => 'PHPUnit_Prvder' 
                ]
            ]
        );

        $this->assertIsArray( $prvder );
        $this->assertArrayHasKey( 'status',  $prvder );
        $this->assertArrayHasKey( 'headers', $prvder );
        $this->assertArrayHasKey( 'body',    $prvder );
        $this->assertIsInt( $prvder['status'] );
        $this->assertEquals( 200, $prvder['status'] );
        $this->assertIsArray( $prvder['headers'] );
        $this->assertIsArray( $prvder['body'] );
        $this->assertObjectHasAttribute( 'id', $prvder['body'][0] );

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


/* CREATE A SITE
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new Providers();

        return $o->postDetail( 
            name: 'PHPUnit_Prvder',
            slug: 'PHPUnit_Prvder',
            options: [ 
                'description' => 'PHPUnit test',
            ]
        );
    }



/* DELETE A RIR
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Providers();

        return $o->deleteDetail( id: $id  );
    }

}