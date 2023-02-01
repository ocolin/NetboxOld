<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testSiteGroups extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new SiteGroups();
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
    $stgrp = $this->postDetail()['body'];

    $o = new SiteGroups();
    $result = $o->getDetail( id: $stgrp->id );
    
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
    $this->deleteDetail( $stgrp->id );
}



/* TEST GET LIST
---------------------------------------------------------------------------- */

public function testGetList() : void
{
    // SETUP
    $stgrp = $this->postDetail()['body'];

    $o = new SiteGroups();
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
     $this->deleteDetail( $stgrp->id );
}



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new SiteGroups();
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
        $o = new SiteGroups();
        $result = $o->postList(
        data: [
            [ 'name' => 'testSiteGroup1', 'slug' => 'aaa' ],
            [ 'name' => 'testSiteGroup2', 'slug' => 'bbb' ],
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
        foreach( $result['body'] AS $stgrp )
        {
            $this->deleteDetail( id: $stgrp->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $stgrp = $this->postDetail()['body'];

        $o = new SiteGroups();
        $result = $o->putDetail( 
              id: $stgrp->id, 
            name: 'updateSiteGroup', 
            slug: 'updateSiteGroup',
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
        $this->deleteDetail( $stgrp->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $stgrp = $this->postDetail()['body'];

        $o = new SiteGroups();
        $result = $o->putList(
            data: [
                [ 
                           'id'   => $stgrp->id, 
                           'name' => 'putSiteGroup',
                           'slug' => 'putSiteGroups',
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
        $this->deleteDetail( $stgrp->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $stgrp = $this->postDetail()['body'];

        $o = new SiteGroups();
        $result = $o->patchDetail(
              id: $stgrp->id,
            name: 'patchSiteGroup',
            slug: 'patchSiteGroup',
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
        $this->deleteDetail( $stgrp->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $stgrp = $this->postDetail()['body'];

        $o = new SiteGroups();
        $result = $o->patchList(
            data: [
                [ 
                          'id' => $stgrp->id, 
                        'name' => 'patchSiteGroups',
                        'slug' => 'patchSiteGroups',
                 'description' => 'patchSiteGroups' 
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
        $this->deleteDetail( $stgrp->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $stgrp = $this->postDetail()['body'];
        
        $o = new SiteGroups();
        $result = $o->deleteDetail( id: $stgrp->id );

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
        $stgrp = $this->postDetail()['body'];

        $o = new SiteGroups();
        $result = $o->deleteList(
            data: [[ 'id' => $stgrp->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }


/* CREATE A SITE GROUP
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new SiteGroups();

        return $o->postDetail( 
            name: 'testSiteGroups',
            slug: 'testSiteGroups',
            data: [ 
                'description' => 'PHPUnit test SiteGroups',
            ]
        );
    }



/* DELETE A SITE GROUP
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new SiteGroups();

        return $o->deleteDetail( id: $id  );
    }

}