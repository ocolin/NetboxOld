<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Tenancy;

require_once __DIR__ . '/../DCIM/TestDCIM.php';

use Cruzio\lib\Netbox\Controllers\Tenancy\ContactAssignments;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\DCIM\TestDCIM;

final class ContactAssignmentsTest extends TestTenancy
{
    public static object $site;
    public static object $contact;
    public static object $role;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsContactAssignment() : void
    {
        $o = new ContactAssignments();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateContactAssignmentBad() : void
    {
        $o = new ContactAssignments();
        $result = $o->create( data: [] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


/* CREATE TEST
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public function testCreateContactAssignment() : int
    {
        $result = self::createContactAssignment(
            site_id: self::$site->id,
            contact_id: self::$contact->id,
            role_id: self::$role->id
        );
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateContactAssignment')]
    public function testGetContactAssignment( int $id ) : void
    {
        $o = new ContactAssignments();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListContactAssignment() : void
    {
        $o = new ContactAssignments();
        $result = $o->get();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'count', $result );
        $this->assertObjectHasProperty( 'next', $result );
        $this->assertObjectHasProperty( 'previous', $result );
        $this->assertObjectHasProperty( 'results', $result );
        $this->assertIsArray( $result->results );
        $this->assertIsObject( $result->results[0] );
        $this->assertObjectHasProperty( 'id', $result->results[0] );
    }


/* BAD REPLACE TEST
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateContactAssignment')]
    public function testReplaceContactAssignmentBad( int $id ) : void
    {
        $o = new ContactAssignments();
        $result = $o->replace( data: [], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


/* REPLACE TEST
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateContactAssignment')]
    public function testReplaceContactAssignment( int $id ) : void
    {
        $o = new ContactAssignments();
        $result = $o->replace( data: [
            'contact' => self::$contact->id,
            'object_id' => self::$site->id,
            'content_type' => 'dcim.site',
            'role' => self::$role->id
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* UPDATE TEST
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateContactAssignment')]
    public function testUpdateContactAssignment( int $id ) : void
    {
        $o = new ContactAssignments();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateContactAssignment')]
    public function testDeleteContactAssignment( int $id ) : void
    {
        $o = new ContactAssignments();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }


/* SETUP
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function setUpBeforeClass() : void
    {
        self::$site = TestDCIM::createSite();
        self::$contact = self::createContact();
        self::$role = self::createContactRole();
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeContactRole( id: self::$role->id );
        self::removeContact( id: self::$contact->id );
        TestDCIM::removeSite( id: self::$site->id );
    }
}