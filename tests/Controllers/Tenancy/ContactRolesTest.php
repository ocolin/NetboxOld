<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Tenancy;

use Cruzio\lib\Netbox\Controllers\Tenancy\ContactRoles;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ContactRolesTest extends TestTenancy
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsContactRole() : void
    {
        $o = new ContactRoles();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateContactRoleBad() : void
    {
        $o = new ContactRoles();
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
    public function testCreateContactRole() : int
    {
        $result = self::createContactRole();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateContactRole')]
    public function testGetContactRole( int $id ) : void
    {
        $o = new ContactRoles();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListContactRole() : void
    {
        $o = new ContactRoles();
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
    #[Depends('testCreateContactRole')]
    public function testReplaceContactRoleBad( int $id ) : void
    {
        $o = new ContactRoles();
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
    #[Depends('testCreateContactRole')]
    public function testReplaceContactRole( int $id ) : void
    {
        $o = new ContactRoles();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace',
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
    #[Depends('testCreateContactRole')]
    public function testUpdateContactRole( int $id ) : void
    {
        $o = new ContactRoles();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateContactRole')]
    public function testDeleteContactRole( int $id ) : void
    {
        $o = new ContactRoles();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}