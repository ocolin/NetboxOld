<?php

declare( strict_types = 1 );

namespace Tests\Models\Extras;

use GuzzleHttp\Exception\GuzzleException;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\Extras\ImageAttachments;
use Cruzio\lib\Netbox\Data\Extras\ImageAttachments AS Data;

require_once __DIR__ . '/../testCore.php';

final class ImageAttachmentsTest extends testCore
{

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new ImageAttachments();
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



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : int
    {
        $o = new ImageAttachments();
        $d = new Data();
        $d->content_type = 'dcim.devicerole';
        $d->object_id = 1;
        $d->image_width = 100;
        $d->image_height = 100;
        $d->image = 'site_612_test1.jpg';
        $result = $o->postDetail( data: $d );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasProperty( 'id', $result->body );

        return $result->body->id;
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */
 
/**
 *  
 */
/* 
    public function testDeleteDetail( int $id ) : void
    {
        $o = new ImageAttachments();
        $result = $o->deleteDetail( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */


/* TEST GET DETAIL
---------------------------------------------------------------------------- */
/*
    public function testGetDetail() : void
    {
        // SETUP
        $attch = $this->postDetail()->body;

        $o = new ImageAttachments();
        $result = $o->getDetail( id: $attch->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $attch->id );
    }
*/


/* TEST GET LIST
---------------------------------------------------------------------------- */
 /* 
    public function testGetList() : void
    {
        $o = new ImageAttachments();
        $result = $o->getList();
        print_r( $result );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasProperty( 'results', $result->body );
        $this->assertIsArray( $result->body->results );
        $this->assertObjectHasProperty( 'id', $result->body->results[0] );
    }
 */


/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new ImageAttachments();
        $result = $o->postList(
        options: [
            [ 
                         'name' => 'PHPUnit_ExpTemp',
                'content_types' => [ 'dcim.sitegroup' ],
                'template_code' => 'testing',
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
        foreach( $result->body AS $attch )
        {
            $this->deleteDetail( id: $attch->id );
        }
    }
 */


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPutDetail() : void
    {
        // SETUP
        $attch = $this->postDetail()->body;

        $o = new ImageAttachments();
        $result = $o->putDetail( 
                       id: $attch->id, 
                     name: 'PHPUnit_ExpTemp',
            content_types: [ 'dcim.sitegroup' ],
            template_code: 'testing',
        );
        
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );

        // CLEAN UP
        $this->deleteDetail( $attch->id );
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $attch = $this->postDetail()->body;

        $o = new ImageAttachments();
        $result = $o->putList(
            options: [
                [ 
                               'id' => $attch->id, 
                             'name' => 'PHPUnit_ExpTemp',
                    'content_types' => [ 'dcim.sitegroup' ],
                    'template_code' => 'testing',
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
        $this->assertObjectHasAttribute( 'id', $result->body[0] );

        // CLEAN UP
        $this->deleteDetail( $attch->id );
    }
 */


/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPatchDetail() : void
    {
        // SETUP
        $attch = $this->postDetail()->body;

        $o = new ImageAttachments();
        $result = $o->patchDetail(
                       id: $attch->id,
                     name: 'PHPUnit_ExpTemp',
            content_types: [ 'dcim.sitegroup' ],
            template_code: 'testing',
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );


        // CLEAN UP
        $this->deleteDetail( $attch->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $attch = $this->postDetail()->body;

        $o = new ImageAttachments();
        $result = $o->patchList(
            options: [
                [ 
                               'id' => $attch->id, 
                             'name' => 'PHPUnit_ExpTemp',
                    'content_types' => [ 'dcim.sitegroup' ],
                    'template_code' => 'testing',
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
        $this->assertObjectHasAttribute( 'id', $result->body[0] );

        // CLEAN UP
        $this->deleteDetail( $attch->id );
    }
 */



/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $attch = $this->postDetail()->body;

        $o = new ImageAttachments();
        $result = $o->deleteList(
            options: [[ 'id' => $attch->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */

    
/* CREATE A REGION
---------------------------------------------------------------------------- */
/* 
    public function postDetail() : Response
    {
        $o = new ImageAttachments();

        return $o->postDetail( 
            content_type: 'dcim.devicerole',
            object_id: 1,
            image_height: 100,
            image_width: 100,
            image: ''
        );
    }
 */


/* DELETE A REGION
---------------------------------------------------------------------------- */
/* 
    public function deleteDetail( int $id ) : Response
    {
        $o = new ImageAttachments();

        return $o->deleteDetail( id: $id  );
    }
 */
}