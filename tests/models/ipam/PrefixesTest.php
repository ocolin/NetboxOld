<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\IPAM\Prefixes AS Options;

require_once __DIR__ . '/../testCore.php';

class PrefixesTest extends testCore
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
        $o = new Prefixes();
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
    $prefix = $this->postDetail()['body'];

    $o = new Prefixes();
    $result = $o->getDetail( id: $prefix->id );
    
    $this->assertIsArray( $result );
    $this->assertArrayHasKey( 'status',  $result );
    $this->assertArrayHasKey( 'headers', $result );
    $this->assertArrayHasKey( 'body',    $result );
    $this->assertIsInt( $result['status'] );
    $this->assertEquals( 200, $result['status'] );
    $this->assertIsArray( $result['headers'] );
    $this->assertIsObject( $result['body'] );

    // CLEAN UP
    $this->deleteDetail( $prefix->id );
}



/* TEST GET LIST
---------------------------------------------------------------------------- */

public function testGetList() : void
{
    // SETUP
    $prefix = $this->postDetail()['body'];

    $o = new Prefixes();
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
     $this->deleteDetail( $prefix->id );
}



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Prefixes();
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
        $o = new Prefixes();
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
        foreach( $result['body'] AS $prefix )
        {
            $this->deleteDetail( id: $prefix->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $prefix = $this->postDetail()['body'];

        $o = new Prefixes();
        $result = $o->putDetail( 
                 id: $prefix->id, 
             prefix: '192.168.1.0/24', 
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
        $this->deleteDetail( $result['body']->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $prefix = $this->postDetail()['body'];
        $this->options->id = $prefix->id;

        $o = new Prefixes();
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
        $this->deleteDetail( $prefix->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $prefix = $this->postDetail()['body'];

        $o = new Prefixes();
        $result = $o->patchDetail(
                 id: $prefix->id,
             prefix: '192.168.1.0/24',
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
        $this->deleteDetail( $prefix->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $prefix = $this->postDetail()['body'];
        $this->options->id = $prefix->id;

        $o = new Prefixes();
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
        $this->deleteDetail( $prefix->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $prefix = $this->postDetail()['body'];
        
        $o = new Prefixes();
        $result = $o->deleteDetail( id: $prefix->id );

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
        $prefix = $this->postDetail()['body'];

        $o = new Prefixes();
        $result = $o->deleteList(
            options: [[ 'id' => $prefix->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE A PREFIX
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new Prefixes();

        return $o->postDetail( 
            prefix: '192.168.1.0/24'
        );
    }



/* DELETE A PREFIX
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Prefixes();

        return $o->deleteDetail( id: $id  );
    }


                
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->prefix = '192.168.1.0/24';
        $this->options->description = 'PHPUnit_IpRangeAvaIPs-' . $rand;

    }
}