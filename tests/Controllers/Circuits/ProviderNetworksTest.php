<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers\Circuits\ProviderNetworks;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ProviderNetworksTest extends TestCircuits
{
    public static object $provider;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsProviderNetwork() : void
    {
        $o = new ProviderNetworks();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateProviderNetworkBad() : void
    {
        $o = new ProviderNetworks();
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
    public function testCreateProviderNetwork() : int
    {
        $result = self::createProviderNetwork( provider_id: self::$provider->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateProviderNetwork')]
    public function testGetProviderNetwork( int $id ) : void
    {
        $o = new ProviderNetworks();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListProviderNetwork() : void
    {
        $o = new ProviderNetworks();
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
    #[Depends('testCreateProviderNetwork')]
    public function testReplaceProviderNetworkBad( int $id ) : void
    {
        $o = new ProviderNetworks();
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
    #[Depends('testCreateProviderNetwork')]
    public function testReplaceProviderNetwork( int $id ) : void
    {
        $o = new ProviderNetworks();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'provider' => self::$provider->id
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
    #[Depends('testCreateProviderNetwork')]
    public function testUpdateProviderNetwork( int $id ) : void
    {
        $o = new ProviderNetworks();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateProviderNetwork')]
    public function testDeleteProviderNetwork( int $id ) : void
    {
        $o = new ProviderNetworks();
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
        self::$provider = self::createProvider();
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeProvider( id: self::$provider->id );
    }
}