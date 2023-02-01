<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testVlans extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new Vlans();
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
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
        $result = $o->getDetail( id: $vlan->id );
        
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
        $this->deleteDetail( id: $vlan->id );
    } 



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
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
        $this->deleteDetail( $vlan->id );
    }
 



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Vlans();
        $result = $this->postDetail( vlg: $_ENV['vlg']->id );

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
        $o = new Vlans();
        $result = $o->postList(
            data: [
                [ 'vid' => 1, 'group' => $_ENV['vlg']->id, 'name' => 'post1' ],
                [ 'vid' => 2, 'group' => $_ENV['vlg']->id, 'name' => 'post2'  ]
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
        foreach( $result['body'] AS $vlan )
        {
            $this->deleteDetail( id: $vlan->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
        $result = $o->putDetail( 
               id: $vlan->id, 
              vid: 1, 
            group: $_ENV['vlg']->id, 
             name: 'putVlan',
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
        $this->deleteDetail( $vlan->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
        $result = $o->putList(
            data: [
                [ 
                             'id' => $vlan->id, 
                            'vid' => 1,
                          'group' => $_ENV['vlg']->id,
                           'name' => 'putVLan',
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
        $this->deleteDetail( $vlan->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
        $result = $o->patchDetail(
                  id: $vlan->id,
                 vid: 1,
               group: $_ENV['vlg']->id,
                name: 'PatchVlan',
                data: [ 'description' => 'Patch Vlan' ]
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
        $this->deleteDetail( $vlan->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
        $result = $o->patchList(
            data: [
                [ 
                       'id' => $vlan->id, 
                      'vid' => 1,
                    'group' => $_ENV['vlg']->id,
                     'name' => 'Patch Vlan' 
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
        $this->deleteDetail( $vlan->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];
        
        $o = new Vlans();
        $result = $o->deleteDetail( id: $vlan->id );

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
        $vlan = $this->postDetail( vlg: $_ENV['vlg']->id )['body'];

        $o = new Vlans();
        $result = $o->deleteList(
            data: [[ 'id' => $vlan->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE AN VLAN
---------------------------------------------------------------------------- */

    public function postDetail( int $vlg ) : array
    {
        $o = new Vlans();

        return $o->postDetail( 
            group: $vlg,
              vid: 1,
             name: 'phpunit-vlan-test',
             data: [ 
                    'description' => 'PHPUnit test VLAN',
             ]
        );
    }



/* DELETE AN VLAN
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Vlans();

        return $o->deleteDetail( id: $id  );
    }



/*
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
    public static function setupGroup()
    {
        $o = new VlanGroups();
        $_ENV['vlg'] = $o->postDetail(
            name: 'phptestunit_vlan_group',
            slug: 'phptestunit_vlan_group'
        )['body'];
    }



/*
---------------------------------------------------------------------------- */

/**
* @afterClass
*/
    public static function closeGroup()
    {
        $o = new VlanGroups();
        $o->deleteDetail( id: $_ENV['vlg']->id );
        unset( $_ENV['vlg'] );
    }
}