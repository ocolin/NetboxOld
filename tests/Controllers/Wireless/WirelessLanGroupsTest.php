<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Wireless;

use Cruzio\lib\Netbox\Controllers\Wireless\WirelessLanGroups;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class WirelessLanGroupsTest extends TestWireless
{
    public static object $user;

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsWirelessLanGroup() : void
    {
        $o = new WirelessLanGroups();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateWirelessLanGroupBad() : void
    {
        $o = new WirelessLanGroups();
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
    public function testCreateWirelessLanGroup() : int
    {
        $result = self::createWirelessLanGroup();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateWirelessLanGroup')]
    public function testGetWirelessLanGroup( int $id ) : void
    {
        $o = new WirelessLanGroups();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListWirelessLanGroup() : void
    {
        $o = new WirelessLanGroups();
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
    #[Depends('testCreateWirelessLanGroup')]
    public function testReplaceWirelessLanGroupBad( int $id ) : void
    {
        $o = new WirelessLanGroups();
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
    #[Depends('testCreateWirelessLanGroup')]
    public function testReplaceWirelessLanGroup( int $id ) : void
    {
        $o = new WirelessLanGroups();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace'
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
    #[Depends('testCreateWirelessLanGroup')]
    public function testUpdateWirelessLanGroup( int $id ) : void
    {
        $o = new WirelessLanGroups();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateWirelessLanGroup')]
    public function testDeleteWirelessLanGroup( int $id ) : void
    {
        $o = new WirelessLanGroups();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }

}