<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Tenancy;

use Cruzio\lib\Netbox\Controllers\Tenancy\Contacts;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ContactsTest extends TestTenancy
{

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsContact() : void
    {
        $o = new Contacts();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateContactBad() : void
    {
        $o = new Contacts();
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
    public function testCreateContact() : int
    {
        $result = self::createContact();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateContact')]
    public function testGetContact( int $id ) : void
    {
        $o = new Contacts();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListContact() : void
    {
        $o = new Contacts();
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
    #[Depends('testCreateContact')]
    public function testReplaceContactBad( int $id ) : void
    {
        $o = new Contacts();
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
    #[Depends('testCreateContact')]
    public function testReplaceContact( int $id ) : void
    {
        $o = new Contacts();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
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
    #[Depends('testCreateContact')]
    public function testUpdateContact( int $id ) : void
    {
        $o = new Contacts();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateContact')]
    public function testDeleteContact( int $id ) : void
    {
        $o = new Contacts();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}