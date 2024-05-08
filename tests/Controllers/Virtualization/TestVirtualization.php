<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Virtualization;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestVirtualization extends TestCase
{



/* VIRTUALIZATION - CLUSTER GROUP
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createClusterGroup() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Virtualization\ClusterGroups();
        $d = new Data\Virtualization\ClusterGroups();
        $d->set( 'name', 'PHPUnit_ClusterGroup-' . $rand );
        $d->set( 'slug', 'PHPUnit_ClusterGroup-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeClusterGroup( int $id ) : void
    {
        $o = new Controllers\Virtualization\ClusterGroups();
        $o->delete( id: $id );
    }



/* VIRTUALIZATION - CLUSTER TYPE
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createClusterType() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Virtualization\ClusterTypes();
        $d = new Data\Virtualization\ClusterTypes();
        $d->set( 'name', 'PHPUnit_ClusterType-' . $rand );
        $d->set( 'slug', 'PHPUnit_ClusterType-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeClusterType( int $id ) : void
    {
        $o = new Controllers\Virtualization\ClusterTypes();
        $o->delete( id: $id );
    }



/* VIRTUALIZATION - CLUSTER
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createCluster(
        int $site_id,
        int $type_id,
        int $group_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Virtualization\Clusters();
        $d = new Data\Virtualization\Clusters();
        $d->set( 'name', 'PHPUnit_Clusters-' . $rand );
        $d->set( 'type',  $type_id );
        $d->set( 'group', $group_id );
        $d->set( 'site',  $site_id );

        return $o->create( data: $d );
    }

    public static function removeCluster( int $id ) : void
    {
        $o = new Controllers\Virtualization\Clusters();
        $o->delete( id: $id );
    }



/* VIRTUALIZATION - VIRTUAL MACHINE
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createVirtualMachine( int $cluster_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Virtualization\VirtualMachines();
        $d = new Data\Virtualization\VirtualMachines();
        $d->set( 'name', 'PHPUnit_VirtualMachine-' . $rand );
        $d->set( 'cluster',  $cluster_id );

        return $o->create( data: $d );
    }

    public static function removeVirtualMachine( int $id ) : void
    {
        $o = new Controllers\Virtualization\VirtualMachines();
        $o->delete( id: $id );
    }



/* VIRTUALIZATION -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createInterface( int $vm_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Virtualization\Interfaces();
        $d = new Data\Virtualization\Interfaces();
        $d->set( 'name', 'PHPUnit_Interface-' . $rand );
        $d->set( 'virtual_machine', $vm_id );

        return $o->create( data: $d );
    }

    public static function removeInterface( int $id ) : void
    {
        $o = new Controllers\Virtualization\Interfaces();
        $o->delete( id: $id );
    }

}