<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\PrefixesAvailablePrefixes;
use Exception;

final class PrefixesAvailablePrefixesTest extends TestIPAM
{
    public static object $prefix;

    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetPrefixesAvailablePrefixes() : void
    {
        $o = new PrefixesAvailablePrefixes();
        $result = $o->get( id: self::$prefix->id );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'family', $result[0] );
        $this->assertObjectHasProperty( 'prefix', $result[0] );
    }


    /* SETUP
    ---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function setUpBeforeClass() : void
    {
        self::$prefix = self::createPrefix();
    }


    /* TEAR DOWN
    ---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removePrefix( id: self::$prefix->id );
    }
}