<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testVrfs extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }


    
/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new Vrfs();
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
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
        $result = $o->getDetail( id: $vrf->id );
        
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
        $this->deleteDetail( $vrf->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
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
        $this->deleteDetail( $vrf->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Vrfs();
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
        $test = $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new Vrfs();
        $result = $o->postList(
            data: [
                [ 'name' => 'testVRF1', 'description' => 'aaa' ],
                [ 'name' => 'testVRF2', 'description' => 'bbb' ],
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
        foreach( $result['body'] AS $vrf )
        {
            $this->deleteDetail( id: $vrf->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
        $result = $o->putDetail( 
              id: $vrf->id, 
            name: 'updateVRF', 
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
        $this->deleteDetail( $vrf->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
        $result = $o->putList(
            data: [
                [ 
                             'id' => $vrf->id, 
                           'name' => 'putVRF',
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
        $this->deleteDetail( $vrf->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
        $result = $o->patchDetail(
              id: $vrf->id,
            name: 'patchVRF',
            data: [ 'description' => 'Patching VRF Test' ]
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
        $this->deleteDetail( $vrf->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
        $result = $o->patchList(
            data: [
                [ 
                          'id' => $vrf->id, 
                        'name' => 'patchVRT',
                 'description' => 'patchVRT Test' 
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
        $this->deleteDetail( $vrf->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $vrf = $this->postDetail()['body'];
        
        $o = new Vrfs();
        $result = $o->deleteDetail( id: $vrf->id );

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
        $vrf = $this->postDetail()['body'];

        $o = new Vrfs();
        $result = $o->deleteList(
            data: [[ 'id' => $vrf->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE A VRF
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new Vrfs();

        return $o->postDetail( 
            name: 'testVRFs',
            data: [ 
                'description' => 'PHPUnit test VRFs',
            ]
        );
    }



/* DELETE A VRF
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Vrfs();

        return $o->deleteDetail( id: $id  );
    }

}