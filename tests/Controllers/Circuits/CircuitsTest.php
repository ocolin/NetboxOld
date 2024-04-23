<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers\Circuits\Circuits;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class CircuitsTest extends TestCircuits
{
    public static object $provider;
    public static object $type;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsCircuit() : void
    {
        $o = new Circuits();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateCircuitBad() : void
    {
        $o = new Circuits();
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
    public function testCreateCircuit() : int
    {
        $result = self::createCircuit(
            provider_id: self::$provider->id,
            type_id: self::$type->id,
        );
        //print_r( $result );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCircuit')]
    public function testGetCircuit( int $id ) : void
    {
        $o = new Circuits();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListCircuit() : void
    {
        $o = new Circuits();
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
    #[Depends('testCreateCircuit')]
    public function testReplaceCircuitBad( int $id ) : void
    {
        $o = new Circuits();
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
    #[Depends('testCreateCircuit')]
    public function testReplaceCircuit( int $id ) : void
    {
        $o = new Circuits();
        $result = $o->replace( data: [
            'cid' => 'PHPUnit_Replace',
            'provider' => self::$provider->id,
            'type' => self::$type->id
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
    #[Depends('testCreateCircuit')]
    public function testUpdateCircuit( int $id ) : void
    {
        $o = new Circuits();
        $result = $o->update( data: [
            'cid' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCircuit')]
    public function testDeleteCircuit( int $id ) : void
    {
        $o = new Circuits();
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
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeProvider( id: self::$provider->id );
        self::removeCircuitType( id: self::$type->id );
    }
}