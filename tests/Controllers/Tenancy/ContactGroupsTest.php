<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Tenancy;

use Cruzio\lib\Netbox\Controllers\Tenancy\ContactGroups;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ContactGroupsTest extends TestTenancy
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsContactGroup() : void
    {
        $o = new ContactGroups();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateContactGroupBad() : void
    {
        $o = new ContactGroups();
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
    public function testCreateContactGroup() : int
    {
        $result = self::createContactGroup();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateContactGroup')]
    public function testGetContactGroup( int $id ) : void
    {
        $o = new ContactGroups();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListContactGroup() : void
    {
        $o = new ContactGroups();
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
    #[Depends('testCreateContactGroup')]
    public function testReplaceContactGroupBad( int $id ) : void
    {
        $o = new ContactGroups();
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
    #[Depends('testCreateContactGroup')]
    public function testReplaceContactGroup( int $id ) : void
    {
        $o = new ContactGroups();
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
    #[Depends('testCreateContactGroup')]
    public function testUpdateContactGroup( int $id ) : void
    {
        $o = new ContactGroups();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateContactGroup')]
    public function testDeleteContactGroup( int $id ) : void
    {
        $o = new ContactGroups();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}