<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Wireless;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestWireless extends TestCase
{

/* WIRELESS -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createWirelessLan() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Wireless\WirelessLans();
        $d = new Data\Wireless\WirelessLans();
        $d->set( 'ssid', 'PHPUnit_WirelessLan-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeWirelessLan( int $id ) : void
    {
        $o = new Controllers\Wireless\WirelessLans();
        $o->delete( id: $id );
    }



/* WIRELESS -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createWirelessLanGroup() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Wireless\WirelessLanGroups();
        $d = new Data\Wireless\WirelessLanGroups();
        $d->set( 'name', 'PHPUnit_WirelessLanGroup-' . $rand );
        $d->set( 'slug', 'PHPUnit_WirelessLanGroup-' . $rand );


        return $o->create( data: $d );
    }

    public static function removeWirelessLanGroup( int $id ) : void
    {
        $o = new Controllers\Wireless\WirelessLanGroups();
        $o->delete( id: $id );
    }



    /* WIRELESS -
    ---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createWirelessLink(
        int $interfaceA,
        int $interfaceB
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Wireless\WirelessLinks();
        $d = new Data\Wireless\WirelessLinks();
        $d->set( 'ssid', 'PHPUnit_WLinks-' . $rand );
        $d->set( 'interface_a', $interfaceA );
        $d->set( 'interface_b', $interfaceB );


        return $o->create( data: $d );
    }

    public static function removeWirelessLink( int $id ) : void
    {
        $o = new Controllers\Wireless\WirelessLinks();
        $o->delete( id: $id );
    }

}