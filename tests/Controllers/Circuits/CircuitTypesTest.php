<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers\Circuits\CircuitTypes;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class CircuitTypesTest extends TestCircuits
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsCircuitType() : void
    {
        $o = new CircuitTypes();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateCircuitTypeBad() : void
    {
        $o = new CircuitTypes();
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
    public function testCreateCircuitType() : int
    {
        $result = self::createCircuitType();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCircuitType')]
    public function testGetCircuitType( int $id ) : void
    {
        $o = new CircuitTypes();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListCircuitType() : void
    {
        $o = new CircuitTypes();
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
    #[Depends('testCreateCircuitType')]
    public function testReplaceCircuitTypeBad( int $id ) : void
    {
        $o = new CircuitTypes();
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
    #[Depends('testCreateCircuitType')]
    public function testReplaceCircuitType( int $id ) : void
    {
        $o = new CircuitTypes();
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
    #[Depends('testCreateCircuitType')]
    public function testUpdateCircuitType( int $id ) : void
    {
        $o = new CircuitTypes();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCircuitType')]
    public function testDeleteCircuitType( int $id ) : void
    {
        $o = new CircuitTypes();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}