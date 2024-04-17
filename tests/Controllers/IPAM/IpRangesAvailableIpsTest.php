<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\IpRangesAvailableIps;
use Exception;

final class IpRangesAvailableIpsTest extends TestIPAM
{
    public static object $range;

/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetIpRangesAvailable() : void
    {
        $o = new IpRangesAvailableIps();
        $result = $o->get( id: self::$range->id );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'family', $result[0] );
        $this->assertObjectHasProperty( 'address', $result[0] );
    }


/* SETUP
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function setUpBeforeClass() : void
    {
        self::$range = self::createIpRange();
    }


    /* TEAR DOWN
    ---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeIpRange( id: self::$range->id );
    }
}