<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\VlanGroupsAvailableVlans;
use Exception;

final class VlanGroupsAvailableVlansTest extends TestIPAM
{
    public static object $vlangroup;

/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetVlanGroupsAvailableVlans() : void
    {
        $o = new VlanGroupsAvailableVlans();
        $result = $o->get( id: self::$vlangroup->id );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'vid', $result[0] );
        $this->assertObjectHasProperty( 'group', $result[0] );
    }


/* SETUP
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function setUpBeforeClass() : void
    {
        self::$vlangroup = self::createVlanGroup();
    }


    /* TEAR DOWN
    ---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeVlanGroup( id: self::$vlangroup->id );
    }
}