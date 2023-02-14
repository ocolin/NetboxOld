<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\IPAM\Aggregates AS Options;

require_once __DIR__ . '/../testCore.php';

class testAggregates extends testCore
{
    public Options $options;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new Aggregates();
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
        $agr = $this->postDetail()['body'];

        $o = new Aggregates();
        $result = $o->getDetail( id: $agr->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        // CLEAN UP
        $this->deleteDetail( id: $agr->id );
    } 



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $agr = $this->postDetail()['body'];

        $o = new Aggregates();
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
        $this->deleteDetail( $agr->id );
    }




/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Aggregates();
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
        $o = new Aggregates();
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
        foreach( $result['body'] AS $agr )
        {
            $this->deleteDetail( id: $agr->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $agr = $this->postDetail()['body'];

        $o = new Aggregates();
        $result = $o->putDetail( 
                 id: $agr->id, 
             prefix: '192.168.66.0/24', 
                rir: $_ENV['rir']->id, 
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
        $this->deleteDetail( $agr->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $agr = $this->postDetail()['body'];
        $this->options->id = $agr->id;

        $o = new Aggregates();
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
        $this->deleteDetail( $agr->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $agr = $this->postDetail()['body'];

        $o = new Aggregates();
        $result = $o->patchDetail(
                 id: $agr->id,
             prefix: '192.168.66.0/24',
                rir: $_ENV['rir']->id,
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
        $this->deleteDetail( $agr->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $agr = $this->postDetail()['body'];
        $this->options->id = $agr->id;

        $o = new Aggregates();
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
        $this->deleteDetail( $agr->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $agr = $this->postDetail()['body'];
        
        $o = new Aggregates();
        $result = $o->deleteDetail( id: $agr->id );

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
        $agr = $this->postDetail()['body'];

        $o = new Aggregates();
        $result = $o->deleteList(
            options: [[ 'id' => $agr->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE AN IP
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new Aggregates();

        return $o->postDetail( 
             prefix: '192.168.77.0/24',
                rir: $_ENV['rir']->id,
        );
    }



/* DELETE AN IP
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Aggregates();

        return $o->deleteDetail( id: $id  );
    }



/*
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        $_ENV['rir'] = self::createRir();
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyRir( rir: $_ENV['rir'] );
        unset( $_ENV['rir'] );
    }

            
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->prefix      = "192.168.77.0/24";
        $this->options->rir         = $_ENV['rir']->id;
        $this->options->description = 'PHPUnit_Aggregate-' . $rand;
    }
}