<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestCircuits extends TestCase
{

/* CIRCUITS - PROVIDER
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createProvider() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Circuits\Providers();
        $d = new Data\Circuits\Providers();
        $d->set( 'name', 'PHPUnit_Provider-' . $rand );
        $d->set( 'slug', 'PHPUnit_Provider-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeProvider( int $id ) : void
    {
        $o = new Controllers\Circuits\Providers();
        $o->delete( id: $id );
    }



/* CIRCUITS - CIRCUIT TYPE
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createCircuitType() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Circuits\CircuitTypes();
        $d = new Data\Circuits\CircuitTypes();
        $d->set( 'name', 'PHPUnit_CircuitType-' . $rand );
        $d->set( 'slug', 'PHPUnit_CircuitType-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeCircuitType( int $id ) : void
    {
        $o = new Controllers\Circuits\CircuitTypes();
        $o->delete( id: $id );
    }



/* CIRCUITS - PROVIDER NETWORK
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createProviderNetwork( int $provider_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Circuits\ProviderNetworks();
        $d = new Data\Circuits\ProviderNetworks();
        $d->set( 'name', 'PHPUnit_ProviderNetwork-' . $rand );
        $d->set( 'provider', $provider_id );

        return $o->create( data: $d );
    }

    public static function removeProviderNetwork( int $id ) : void
    {
        $o = new Controllers\Circuits\ProviderNetworks();
        $o->delete( id: $id );
    }



/* CIRCUITS - CIRCUIT
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createCircuit( int $provider_id, int $type_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Circuits\Circuits();
        $d = new Data\Circuits\Circuits();
        $d->set( 'provider', $provider_id );
        $d->set( 'cid', 'PHPUnit_Circuit-' . $rand );
        $d->set( 'type', $type_id );
        $d->set( 'install_date', '2023-01-01' );

        return $o->create( data: $d );
    }

    public static function removeCircuit( int $id ) : void
    {
        $o = new Controllers\Circuits\Circuits();
        $o->delete( id: $id );
    }



/* CIRCUITS - CIRCUIT TERMINATION
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createCircuitTermination( int $circuit_id, int $site_id ) : object
    {
        $o = new Controllers\Circuits\CircuitTerminations();
        $d = new Data\Circuits\CircuitTerminations();
        $d->set( 'circuit', $circuit_id );
        $d->set( 'term_side', 'A' );
        $d->set( 'site', $site_id );

        return $o->create( data: $d );
    }

    public static function removeTermination( int $id ) : void
    {
        $o = new Controllers\Circuits\CircuitTerminations();
        $o->delete( id: $id );
    }

}