<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Circuits;

require_once __DIR__ . '/../DCIM/TestDCIM.php';

use Cruzio\lib\Netbox\Controllers\Circuits\CircuitTerminations;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\DCIM\TestDCIM;

final class CircuitTerminationsTest extends TestCircuits
{
    public static object $provider;
    public static object $type;
    public static object $site;
    public static object $circuit;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsCircuitTermination() : void
    {
        $o = new CircuitTerminations();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateCircuitTerminationBad() : void
    {
        $o = new CircuitTerminations();
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
    public function testCreateCircuitTermination() : int
    {
        $result = self::createCircuitTermination(
            circuit_id: self::$circuit->id,
            site_id: self::$site->id
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCircuitTermination')]
    public function testGetCircuitTermination( int $id ) : void
    {
        $o = new CircuitTerminations();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListCircuitTermination() : void
    {
        $o = new CircuitTerminations();
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
    #[Depends('testCreateCircuitTermination')]
    public function testReplaceCircuitTerminationBad( int $id ) : void
    {
        $o = new CircuitTerminations();
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

    #[Depends('testCreateCircuitTermination')]
    public function testReplaceCircuitTermination( int $id ) : void
    {
        $o = new CircuitTerminations();
        $result = $o->replace( data: [
            'term_side' => 'A',
            'circuit' => self::$circuit->id,
            'site' => self::$site->id
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
    #[Depends('testCreateCircuitTermination')]
    public function testUpdateCircuitTermination( int $id ) : void
    {
        $o = new CircuitTerminations();
        $result = $o->update( data: [
            'term_side' => 'A',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCircuitTermination')]
    public function testDeleteCircuitTermination( int $id ) : void
    {
        $o = new CircuitTerminations();
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
        self::$type = self::createCircuitType();
        self::$site = TestDCIM::createSite();
        self::$circuit = self::createCircuit(
            provider_id: self::$provider->id,
            type_id: self::$type->id
        );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeCircuit( id: self::$circuit->id );
        TestDCIM::removeSite( id: self::$site->id );
        self::removeProvider( id: self::$provider->id );
        self::removeCircuitType( id: self::$type->id );
    }
}