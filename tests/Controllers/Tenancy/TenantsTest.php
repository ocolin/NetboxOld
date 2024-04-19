<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Tenancy;

use Cruzio\lib\Netbox\Controllers\Tenancy\Tenants;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class TenantsTest extends TestTenancy
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsTenant() : void
    {
        $o = new Tenants();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateTenantBad() : void
    {
        $o = new Tenants();
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
    public function testCreateTenant() : int
    {
        $result = self::createTenant();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateTenant')]
    public function testGetTenant( int $id ) : void
    {
        $o = new Tenants();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListTenant() : void
    {
        $o = new Tenants();
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
    #[Depends('testCreateTenant')]
    public function testReplaceTenantBad( int $id ) : void
    {
        $o = new Tenants();
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
    #[Depends('testCreateTenant')]
    public function testReplaceTenant( int $id ) : void
    {
        $o = new Tenants();
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
    #[Depends('testCreateTenant')]
    public function testUpdateTenant( int $id ) : void
    {
        $o = new Tenants();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateTenant')]
    public function testDeleteTenant( int $id ) : void
    {
        $o = new Tenants();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}