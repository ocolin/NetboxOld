<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\Aggregates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class AggregatesTest extends TestIPAM
{
    public static object $rir;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsAggregate() : void
    {
        $o = new Aggregates();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateAggregateBad() : void
    {
        $o = new Aggregates();
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
    public function testCreateAggregate() : int
    {
        $result = self::createAggregate( rir_id: self::$rir->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateAggregate')]
    public function testGetAggregate( int $id ) : void
    {
        $o = new Aggregates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListAggregate() : void
    {
        $o = new Aggregates();
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
    #[Depends('testCreateAggregate')]
    public function testReplaceAggregateBad( int $id ) : void
    {
        $o = new Aggregates();
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
    #[Depends('testCreateAggregate')]
    public function testReplaceAggregate( int $id ) : void
    {
        $o = new Aggregates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'prefix' => '192.168.77.0/24',
            'rir' => self::$rir->id
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
    #[Depends('testCreateAggregate')]
    public function testUpdateAggregate( int $id ) : void
    {
        $o = new Aggregates();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateAggregate')]
    public function testDeleteAggregate( int $id ) : void
    {
        $o = new Aggregates();
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
        self::$rir = self::createRir();
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeRir( id: self::$rir->id );
    }
}