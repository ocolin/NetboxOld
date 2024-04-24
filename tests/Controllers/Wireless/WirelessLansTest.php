<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Wireless;

use Cruzio\lib\Netbox\Controllers\Wireless\WirelessLans;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class WirelessLansTest extends TestWireless
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsWirelessLan() : void
    {
        $o = new WirelessLans();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateWirelessLanBad() : void
    {
        $o = new WirelessLans();
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
    public function testCreateWirelessLan() : int
    {
        $result = self::createWirelessLan();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateWirelessLan')]
    public function testGetWirelessLan( int $id ) : void
    {
        $o = new WirelessLans();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListWirelessLan() : void
    {
        $o = new WirelessLans();
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
    #[Depends('testCreateWirelessLan')]
    public function testReplaceWirelessLanBad( int $id ) : void
    {
        $o = new WirelessLans();
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
    #[Depends('testCreateWirelessLan')]
    public function testReplaceWirelessLan( int $id ) : void
    {
        $o = new WirelessLans();
        $result = $o->replace( data: [
            'ssid' => 'PHPUnit_Replace',
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
    #[Depends('testCreateWirelessLan')]
    public function testUpdateWirelessLan( int $id ) : void
    {
        $o = new WirelessLans();
        $result = $o->update( data: [
            'ssid' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateWirelessLan')]
    public function testDeleteWirelessLan( int $id ) : void
    {
        $o = new WirelessLans();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }

}