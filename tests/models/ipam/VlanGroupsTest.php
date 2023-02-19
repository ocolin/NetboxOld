<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\IPAM\VlanGroups AS Options;

require_once __DIR__ . '/../testCore.php';

class VlanGroupsTest extends testCore
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
        $o = new VlanGroups();
        $result = $o->options();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
    }




/* TEST GET DETAIL
---------------------------------------------------------------------------- */

public function testGetDetail() : void
{
    // SETUP
    $vgrp = $this->postDetail()['body'];

    $o = new VlanGroups();
    $result = $o->getDetail( id: $vgrp->id );
    
    $this->assertIsArray( $result );
    $this->assertArrayHasKey( 'status',  $result );
    $this->assertArrayHasKey( 'headers', $result );
    $this->assertArrayHasKey( 'body',    $result );
    $this->assertIsInt( $result['status'] );
    $this->assertEquals( 200, $result['status'] );
    $this->assertIsArray( $result['headers'] );
    $this->assertIsObject( $result['body'] );

    // CLEAN UP
    $this->deleteDetail( $vgrp->id );
}



/* TEST GET LIST
---------------------------------------------------------------------------- */

public function testGetList() : void
{
    // SETUP
    $vgrp = $this->postDetail()['body'];

    $o = new VlanGroups();
    $result = $o->getList();

    $this->assertIsArray( $result );
    $this->assertArrayHasKey( 'status',  $result );
    $this->assertArrayHasKey( 'headers', $result );
    $this->assertArrayHasKey( 'body',    $result );
    $this->assertIsInt( $result['status'] );
    $this->assertEquals( 200, $result['status'] );
    $this->assertIsArray( $result['headers'] );
    $this->assertIsObject( $result['body'] );
    $this->assertIsArray( $result['body']->results );

     // CLEAN UP
     $this->deleteDetail( $vgrp->id );
}



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new VlanGroups();
        $result = $this->postDetail();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        //CLEAN UP
        $test = $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new VlanGroups();
        $result = $o->postList( options: [ $this->options ] );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        //CLEAN UP
        foreach( $result['body'] AS $vgrp )
        {
            $this->deleteDetail( id: $vgrp->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $vgrp = $this->postDetail()['body'];

        $o = new VlanGroups();
        $result = $o->putDetail( 
                 id: $vgrp->id, 
               name: 'testVLanGroup1', 
               slug: 'testVLanGroup1',
        );
        
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $vgrp->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $vgrp = $this->postDetail()['body'];
        $this->options->id = $vgrp->id;

        $o = new VlanGroups();
        $result = $o->putList( options: [ $this->options ] );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $vgrp->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $vgrp = $this->postDetail()['body'];

        $o = new VlanGroups();
        $result = $o->patchDetail(
                 id: $vgrp->id,
               name: 'patchVlanGroup',
               slug: 'patchVlanGroup',
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $vgrp->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $vgrp = $this->postDetail()['body'];
        $this->options->id = $vgrp->id;

        $o = new VlanGroups();
        $result = $o->patchList( options: [ $this->options ] );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $vgrp->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $vgrp = $this->postDetail()['body'];
        
        $o = new VlanGroups();
        $result = $o->deleteDetail( id: $vgrp->id );

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
        $vgrp = $this->postDetail()['body'];

        $o = new VlanGroups();
        $result = $o->deleteList(
            options: [[ 'id' => $vgrp->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }


    
/* CREATE A VLAN GROUP
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new VlanGroups();

        return $o->postDetail( 
            name: 'testVlanGroup',
            slug: 'testVlanGroup',
        );
    }



/* DELETE A VLAN GROUP
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new VlanGroups();

        return $o->deleteDetail( id: $id  );
    }



                
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name = 'PHPUnit_VlanGroup-' . $rand;
        $this->options->slug = 'PHPUnit_VlanGroup-' . $rand;
    }

}