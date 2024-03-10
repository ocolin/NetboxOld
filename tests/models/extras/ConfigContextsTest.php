<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;

require_once __DIR__ . '/../testCore.php';

final class ConfigContextsTest extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new ConfigContexts();
        $result = $o->options();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->getDetail( id: $context->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $context->id );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->getList();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertIsArray( $result->body->results );

        // CLEAN UP
        $this->deleteDetail( $context->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new ConfigContexts();
        $result = $this->postDetail();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        //CLEAN UP
        $test = $this->deleteDetail( $result->body->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new ConfigContexts();
        $result = $o->postList(
        options: [
            [ 
                'name' => 'PHPUnit_CfgCntxt',
                'data' => [ 'foo' => 123 ]
            ],
        ]  
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $context )
        {
            $this->deleteDetail( id: $context->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->putDetail( 
              id: $context->id, 
            name: 'PHPUnit_CfgCntxt',
            data: [ 'foo' => 123 ]
        );
        
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $context->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->putList(
            options: [
                [ 
                      'id' => $context->id, 
                    'name' => 'PHPUnit_CfgCntxt',
                    'data' => [ 'foo' => 123 ]
                ]
            ]
        );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $context->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->patchDetail(
                  id: $context->id,
            name: 'PHPUnit_CfgCntxt',
            data: [ 'foo' => 123 ]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );


        // CLEAN UP
        $this->deleteDetail( $context->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->patchList(
            options: [
                [ 
                      'id' => $context->id, 
                    'name' => 'PHPUnit_CfgCntxt',
                    'data' => [ 'foo' => 123 ]
                ]
            ]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $context->id );
    }




/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $context = $this->postDetail()->body;
        
        $o = new ConfigContexts();
        $result = $o->deleteDetail( id: $context->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $context = $this->postDetail()->body;

        $o = new ConfigContexts();
        $result = $o->deleteList(
            options: [[ 'id' => $context->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }


/* CREATE A REGION
---------------------------------------------------------------------------- */

    public function postDetail() : Response
    {
        $o = new ConfigContexts();

        return $o->postDetail( 
            name: 'PHPUnit_CfgCntxt',
            data: [ 'foo' => 123 ]
        );
    }



/* DELETE A REGION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new ConfigContexts();

        return $o->deleteDetail( id: $id  );
    }

}