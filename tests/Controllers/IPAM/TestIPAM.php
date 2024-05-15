<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestIPAM extends TestCase
{

/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createFhrpGroup() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\FhrpGroups();
        $d = new Data\IPAM\FhrpGroups();
        $d->set( 'protocol', 'vrrp2' );
        $d->set( 'group_id', $rand );
        $d->set( 'description', 'PHPUnit_FhrpGroup-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeFhrpGroup( int $id ) : void
    {
        $o = new Controllers\IPAM\FhrpGroups();
        $o->delete( id: $id );
    }


/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createIpAddress() : object
    {
        $rand = rand( 2, 254 );
        $o = new Controllers\IPAM\IpAddresses();
        $d = new Data\IPAM\IpAddresses();
        $d->set( 'address', "192.168.44.$rand/24" );
        $d->set( 'description', 'PHPUnit_IP-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeIpAddress( int $id ) : void
    {
        $o = new Controllers\IPAM\IpAddresses();
        $o->delete( id: $id );
    }


/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createIpRange() : object
    {
        $o = new Controllers\IPAM\IpRanges();
        $d = new Data\IPAM\IpRanges();
        $d->set( 'start_address', '192.168.77.0/24' );
        $d->set( 'end_address', '192.168.77.254/24' );
        $d->set( 'description', 'PHPUnit_IpRange' );

        return $o->create( data: $d );
    }

    public static function removeIpRange( int $id ) : void
    {
        $o = new Controllers\IPAM\IpRanges();
        $o->delete( id: $id );
    }


/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPrefix() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Prefixes();
        $d = new Data\IPAM\Prefixes();
        $d->set( 'prefix', '192.168.1.0/24' );
        $d->set( 'description', 'PHPUnit_Prefix-' . $rand );

        return $o->create( data: $d );
    }

    public static function removePrefix( int $id ) : void
    {
        $o = new Controllers\IPAM\Prefixes();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRir() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Rirs();
        $d = new Data\IPAM\Rirs();
        $d->set( 'name', 'PHPUnit_Rir-' . $rand );
        $d->set( 'slug', 'PHPUnit_Rir-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeRir( int $id ) : void
    {
        $o = new Controllers\IPAM\Rirs();
        $o->delete( id: $id );
    }


/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRole() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Roles();
        $d = new Data\IPAM\Roles();
        $d->set( 'name', 'PHPUnit_Role-' . $rand );
        $d->set( 'slug', 'PHPUnit_Role-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeRole( int $id ) : void
    {
        $o = new Controllers\IPAM\Roles();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRouteTarget() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\RouteTargets();
        $d = new Data\IPAM\RouteTargets();
        $d->set( 'name', 'PHPUnit_RT-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeRouteTarget( int $id ) : void
    {
        $o = new Controllers\IPAM\RouteTargets();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createServiceTemplate() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\ServiceTemplates();
        $d = new Data\IPAM\ServiceTemplates();
        $d->set( 'name', 'PHPUnit_ST-' . $rand );
        $d->set( 'ports', [1] );
        $d->set( 'protocol', 'tcp' );

        return $o->create( data: $d );
    }

    public static function removeServiceTemplate( int $id ) : void
    {
        $o = new Controllers\IPAM\ServiceTemplates();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createVlanGroup() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\VlanGroups();
        $d = new Data\IPAM\VlanGroups();
        $d->set( 'name', 'PHPUnit_VlanGroup-' . $rand );
        $d->set( 'slug', 'PHPUnit_VlanGroup-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeVlanGroup( int $id ) : void
    {
        $o = new Controllers\IPAM\VlanGroups();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createVlan() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Vlans();
        $d = new Data\IPAM\Vlans();
        $d->set( 'name', 'PHPUnit_Vlan-' . $rand );
        $d->set( 'vid', 100 );

        return $o->create( data: $d );
    }

    public static function removeVlan( int $id ) : void
    {
        $o = new Controllers\IPAM\Vlans();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createVrf() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Vrfs();
        $d = new Data\IPAM\Vrfs();
        $d->set( 'name', 'PHPUnit_Vrf-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeVrf( int $id ) : void
    {
        $o = new Controllers\IPAM\Vrfs();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createAggregate( int $rir_id ) : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Aggregates();
        $d = new Data\IPAM\Aggregates();
        $d->set( 'name', 'PHPUnit_Aggregate-' . $rand );
        $d->set( 'prefix', '192.168.77.0/24' );
        $d->set( 'rir', $rir_id );

        return $o->create( data: $d );
    }

    public static function removeAggregate( int $id ) : void
    {
        $o = new Controllers\IPAM\Aggregates();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createAsn( int $rir_id ) : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Asns();
        $d = new Data\IPAM\Asns();
        $d->set( 'description', 'PHPUnit_Asn-' . $rand );
        $d->set( 'asn', 12345 );
        $d->set( 'rir', $rir_id );

        return $o->create( data: $d );
    }

    public static function removeAsn( int $id ) : void
    {
        $o = new Controllers\IPAM\Asns();
        $o->delete( id: $id );
    }



/* IPAM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createFhrpGroupAssignment(
        int $group_id,
        int $interface_id
    ) : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\FhrpGroupAssignments();
        $d = new Data\IPAM\FhrpGroupAssignments();
        $d->set( 'description', 'PHPUnit_FhrpGroupAssignment-' . $rand );
        $d->set( 'group', $group_id );
        $d->set( 'interface_id', $interface_id );
        $d->set( 'interface_type', 'dcim.device' );
        $d->set( 'priority', 1 );

        return $o->create( data: $d );
    }

    public static function removeFhrpGroupAssignment( int $id ) : void
    {
        $o = new Controllers\IPAM\FhrpGroupAssignments();
        $o->delete( id: $id );
    }



    /* IPAM
    ---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createService(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 10000 );
        $o = new Controllers\IPAM\Services();
        $d = new Data\IPAM\Services();
        $d->set( 'name', 'PHPUnit_Service-' . $rand );
        $d->set( 'device', $device_id );
        $d->set( 'ports', [1] );
        $d->set( 'protocol', 'tcp' );

        return $o->create( data: $d );
    }

    public static function removeService( int $id ) : void
    {
        $o = new Controllers\IPAM\Services();
        $o->delete( id: $id );
    }

}