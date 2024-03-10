<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Tenancy;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Tenancy\ContactAssignments AS Options;

require_once __DIR__ . '/../testCore.php';

final class ContactAssignmentsTest extends testCore
{
    public Options $options;
    public static $crole;
    public static $cgroup;
    public static $contact;

    public function __construct()
    {
        parent::__construct();
    }

// UNFINISHED! Invalid value. Specify a content type as '<app_label>.<model_name>'.

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new ContactAssignments();
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
/* 
    public function testGetDetail() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;
        print_r( $assgn );

        $o = new ContactAssignments();
        $result = $o->getDetail( id: $assgn->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $assgn->id );
    }
 */


/* TEST GET LIST
---------------------------------------------------------------------------- */
/* 
    public function testGetList() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;

        $o = new ContactAssignments();
        $result = $o->getList();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'results', $result->body );
        $this->assertIsArray( $result->body->results );
        $this->assertObjectHasAttribute( 'id', $result->body->results[0] );

        // CLEAN UP
        $this->deleteDetail( $assgn->id );
    }
 */


/* TEST POST DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPostDetail() : void
    {
        $o = new ContactAssignments();
        $result = $this->postDetail();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );

        //CLEAN UP
        $test = $this->deleteDetail( $result->body->id );
    }
 */


/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new ContactAssignments();
        $result = $o->postList(
        options: [
            [ 
                 'name' => 'PHPUnit_Contact',
                'group' => self::$cgroup->id
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
        foreach( $result->body AS $assgn )
        {
            $this->deleteDetail( id: $assgn->id );
        }
    }
 */


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPutDetail() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;

        $o = new ContactAssignments();
        $result = $o->putDetail( 
               id: $assgn->id, 
             name: 'PHPUnit_Contact', 
            group: self::$cgroup->id
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
        $this->deleteDetail( $assgn->id );
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;

        $o = new ContactAssignments();
        $result = $o->putList(
            options: [
                [ 
                       'id' => $assgn->id, 
                     'name' => 'PHPUnit_Contact',
                    'group' => self::$cgroup->id
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
        $this->deleteDetail( $assgn->id );
    }
 */


/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPatchDetail() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;

        $o = new ContactAssignments();
        $result = $o->patchDetail(
               id: $assgn->id,
             name: 'PHPUnit_Contact',
            group: self::$cgroup->id
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
        $this->deleteDetail( $assgn->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;

        $o = new ContactAssignments();
        $result = $o->patchList(
            options: [
                [ 
                       'id' => $assgn->id, 
                     'name' => 'PHPUnit_Contact',
                    'group' => self::$cgroup->id
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
        $this->deleteDetail( $assgn->id );
    }
 */



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testDeleteDetail() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;
        
        $o = new ContactAssignments();
        $result = $o->deleteDetail( id: $assgn->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $assgn = $this->postDetail()->body;

        $o = new ContactAssignments();
        $result = $o->deleteList(
            options: [[ 'id' => $assgn->id ]]
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

    public function postDetail() : Response
    {
        $o = new ContactAssignments();

        return $o->postDetail( 
            content_type: 'Tenancy.Contacts',
               object_id: 0,
                 contact: self::$contact->id,
                    role: self::$crole->id,
                priority: 'primary'
        );
    }



/* DELETE A REGION
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new ContactAssignments();

        return $o->deleteDetail( id: $id  );
    }


/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$crole   = self::createContactRole();
        self::$cgroup  = self::createContactGroup();
        self::$contact = self::createContact( group: self::$cgroup );
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyContact( contact: self::$contact );
        self::destroyContactGroup( group: self::$cgroup );
        self::destroyContactRole( role: self::$crole );
        sleep(1);
    }
    
/*
---------------------------------------------------------------------------- */

    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->content_type = 'Tenancy.Contacts';
        $this->options->object_id    = 0;
        $this->options->contact      = self::$contact->id;
        $this->options->role         = self::$crole->id;
        $this->options->priority     = 'primary';
    }

}