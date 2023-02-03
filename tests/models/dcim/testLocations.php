<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testLocations extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new Locations();
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
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
        $result = $o->getDetail( id: $loc->id );
        
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
        $this->deleteDetail( id: $loc->id );
    } 



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
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
        $this->deleteDetail( $loc->id );
    }
 



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Locations();
        $result = $this->postDetail( site: $_ENV['site']->id );

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
        $o = new Locations();
        $result = $o->postList(
            options: [
                [ 'name' => 'loc1', 'slug' => 'loc1', 'site' => $_ENV['site']->id ],
                [ 'name' => 'loc2', 'slug' => 'loc2', 'site' => $_ENV['site']->id ]
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
        foreach( $result['body'] AS $loc )
        {
            $this->deleteDetail( id: $loc->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
        $result = $o->putDetail( 
                 id: $loc->id, 
               name: 'putLocation', 
               slug: 'putLocation',
               site: $_ENV['site']->id, 
               options: [ 'description' => 'Updated description' ]
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
        $this->deleteDetail( $loc->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
        $result = $o->putList(
            options: [
                [ 
                             'id' => $loc->id, 
                           'name' => 'location1test',
                           'slug' => 'location1test',
                           'site' => $_ENV['site']->id,
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
        $this->deleteDetail( $loc->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
        $result = $o->patchDetail(
                 id: $loc->id,
               name: 'patchLocationTest',
               slug: 'patchLocationTest',
               site: $_ENV['site']->id,
               options: [ 'description' => 'Patch Location' ]
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
        $this->deleteDetail( $loc->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
        $result = $o->patchList(
            options: [
                [ 
                             'id' => $loc->id, 
                           'name' => 'patchLocationTest',
                           'slug' => 'patchLocationTest',
                           'site' => $_ENV['site']->id,
                    'description' => 'Patch ASN' 
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
        $this->deleteDetail( $loc->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];
        
        $o = new Locations();
        $result = $o->deleteDetail( id: $loc->id );

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
        $loc = $this->postDetail( site: $_ENV['site']->id )['body'];

        $o = new Locations();
        $result = $o->deleteList(
            options: [[ 'id' => $loc->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE AN LOCATION
---------------------------------------------------------------------------- */

    public function postDetail( int $site ) : array
    {
        $o = new Locations();

        return $o->postDetail( 
               name: 'phpunit_location',
               slug: 'phpunit_location',
               site: $site,
              options: [ 
                    'description' => 'PHPUnit test Locations',
              ]
        );
    }



/* DELETE AN LOCATION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Locations();

        return $o->deleteDetail( id: $id  );
    }



/*
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
    public static function setupSite()
    {
        $o = new Sites();
        $_ENV['site'] = $o->postDetail(
            name: 'phptestunit_site',
            slug: 'phptestunit_site'
        )['body'];
    }



/*
---------------------------------------------------------------------------- */

/**
* @afterClass
*/
    public static function closeSite()
    {
        $o = new Sites();
        $o->deleteDetail( id: $_ENV['site']->id );
        unset( $_ENV['site'] );
    }
}