<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\Wireless\WirelessLanGroups AS Options;

require_once __DIR__ . '/../testCore.php';

final class WirelessLanGroupsTest extends testCore
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
        $o = new WirelessLanGroups();
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
        $group = $this->postDetail()['body'];

        $o = new WirelessLanGroups();
        $result = $o->getDetail( id: $group->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $group->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $group = $this->postDetail()['body'];

        $o = new WirelessLanGroups();
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
        $this->deleteDetail( $group->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new WirelessLanGroups();
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
        $o = new WirelessLanGroups();
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
        foreach( $result['body'] AS $group )
        {
            $this->deleteDetail( id: $group->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $group = $this->postDetail()['body'];

        $o = new WirelessLanGroups();
        $result = $o->putDetail( 
                id: $group->id, 
              name: 'PHPUnit_WifiLanGrp',
              slug: 'PHPUnit_WifiLanGrp',
            parent: null
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
        $this->deleteDetail( $group->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $group = $this->postDetail()['body'];
        $this->options->id = $group->id;

        $o = new WirelessLanGroups();
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
        $this->deleteDetail( $group->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $group = $this->postDetail()['body'];

        $o = new WirelessLanGroups();
        $result = $o->patchDetail(
                id: $group->id,
              name: 'PHPUnit_WifiLanGrp',
              slug: 'PHPUnit_WifiLanGrp',
            parent: null
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
        $this->deleteDetail( $group->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $group = $this->postDetail()['body'];
        $this->options->id = $group->id;

        $o = new WirelessLanGroups();
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
        $this->deleteDetail( $group->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $group = $this->postDetail()['body'];
        
        $o = new WirelessLanGroups();
        $result = $o->deleteDetail( id: $group->id );

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
        $group = $this->postDetail()['body'];

        $o = new WirelessLanGroups();
        $result = $o->deleteList(
            options: [[ 'id' => $group->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }


/* CREATE A REGION
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new WirelessLanGroups();

        return $o->postDetail( 
              name: 'PHPUnit_WifiLanGrp',
              slug: 'PHPUnit_WifiLanGrp',
            parent: null
        );
    }



/* DELETE A REGION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new WirelessLanGroups();

        return $o->deleteDetail( id: $id  );
    }


    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name   = 'PHPUnit_WifiLanGrp-' . $rand;
        $this->options->slug   = 'PHPUnit_WifiLanGrp-' . $rand;
        $this->options->parent = null;
    }

}