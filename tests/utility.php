<?php

declare( strict_types = 1 );
namespace Cruzio\lib\Netbox\Models;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load( __DIR__ . '/.env' );



clearAll();

/**
 * @return void
 */

function clearAll()
{
    clearIpAddresses();
    clearIpRanges();
    clearClusters();
    clearClusterTypes();
    clearClusterGroups();
    clearDevices();
    clearModuleBays();
    clearRackRoles();
    clearRacks();
    clearVirtualChassis();
    clearDeviceRole();
    clearLocation();
    clearDeviceType();
    clearTenants();
    clearPlatforms();
    clearManufacturers();
    clearProviderNetworks();
    clearProviders();
    clearCircuitType();
    clearCircuit();
    clearContactGroup();
    clearContact();
    clearCustomLinks();
    clearTags();
    clearWirelessLanGroups();
    clearSites();
}

/**
 * @return void
 */

function clearDevices()
{
    $o = new DCIM\Devices();
    $devices = $o->getList()['body'];

    foreach( $devices->results as $device )
    {
        $o->deleteDetail( id: $device->id) ;
    }
}

/**
 * @return void
 */

function clearIpRanges()
{
    $o = new IPAM\IpRanges();
    $ranges = $o->getList()['body'];

    foreach( $ranges->results as $range )
    {
        $o->deleteDetail( id: $range->id) ;
    }
}

/**
 * @return void
 */

function clearIpAddresses()
{
    $o = new IPAM\IpAddresses();
    $ips = $o->getList()['body'];

    foreach( $ips->results as $ip )
    {
        $o->deleteDetail( id: $ip->id) ;
    }
}

/**
 * @return void
 */

function clearClusterTypes()
{
    $o = new Virtualization\ClusterTypes();
    $types = $o->getList()['body'];

    foreach( $types->results as $type )
    {
        $o->deleteDetail( id: $type->id) ;
    }
}

/**
 * @return void
 */

function clearClusterGroups()
{
    $o = new Virtualization\ClusterGroups();
    $groups = $o->getList()['body'];

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id) ;
    }
}


/**
 * @return void
 */

function clearClusters()
{
    $o = new Virtualization\Clusters();
    $clusters = $o->getList()['body'];

    foreach( $clusters->results as $cluster )
    {
        $o->deleteDetail( id: $cluster->id) ;
    }
}


/**
 * @return void
 */

function clearRackRoles()
{
    $o = new DCIM\RackRoles();
    $roles = $o->getList()['body'];

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id);
    }
}

/**
 * @return void
 */

function clearRacks()
{
    $o = new DCIM\Racks();
    $rack = $o->getList()['body'];

    foreach( $rack->results as $rack )
    {
        $a = new DCIM\Racks();
        $a->deleteDetail( id: $rack->id) ;
    }
}

/**
 * @return void
 */

function clearVirtualChassis()
{
    $o = new DCIM\VirtualChassis();
    $chassis = $o->getList()['body'];

    foreach( $chassis->results as $chas )
    {
        $o->deleteDetail( id: $chas->id );
    }
}

/**
 * @return void
 */

function clearDeviceRole()
{
    $o = new DCIM\DeviceRoles();
    $roles = $o->getList()['body'];

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id );
    }
}

/**
 * @return void
 */

function clearLocation()
{
    $o = new DCIM\Locations();
    $locs = $o->getList()['body'];

    foreach( $locs->results as $loc )
    {
        $o->deleteDetail( id: $loc->id );
    }
}

/**
 * @return void
 */

function clearDeviceType()
{
    $o = new DCIM\DeviceTypes();
    $dts = $o->getList()['body'];

    foreach( $dts->results as $dt )
    {
        $a = new DCIM\DeviceTypes();
        $test = $a->deleteDetail( id: $dt->id );
    }
}

/**
 * @return void
 */

function clearTenants()
{
    $o = new Tenancy\Tenants();
    $tenants = $o->getList()['body'];

    foreach( $tenants->results as $tenant )
    {
        $o->deleteDetail( id: $tenant->id );
    }
}

/**
 * @return void
 */

function clearManufacturers()
{
    $o = new DCIM\Manufacturers();
    $manfs = $o->getList()['body'];

    foreach( $manfs->results as $manf )
    {
       $test = $o->deleteDetail( id: $manf->id );
    }
}

/**
 * @return void
 */

function clearPlatforms()
{
    $o = new DCIM\Platforms();
    $platforms = $o->getList()['body'];

    foreach( $platforms->results as $platform )
    {
       $test = $o->deleteDetail( id: $platform->id );
    }
}

/**
 * @return void
 */

function clearSites()
{
    $o = new DCIM\Sites();
    $sites = $o->getList()['body'];

    foreach( $sites->results as $site )
    {
        $a = new DCIM\Sites();
        $test = $a->deleteDetail( id: $site->id );
    }
}

/**
 * @return void
 */

function clearModuleBays()
{
    $o = new DCIM\ModuleBays();
    $bays = $o->getList()['body'];

    foreach( $bays->results as $bay )
    {
        $o->deleteDetail( id: $bay->id );
    }
}

/**
 * @return void
 */

function clearProviders()
{
    $o = new Circuits\Providers();
    $provs = $o->getList()['body'];

    foreach( $provs->results as $prov )
    {
        $test = $o->deleteDetail( id: $prov->id );
    }
}

/**
 * @return void
 */

function clearProviderNetworks()
{
    $o = new Circuits\ProviderNetworks();
    $provs = $o->getList()['body'];

    foreach( $provs->results as $prov )
    {
        $test = $o->deleteDetail( id: $prov->id );
    }
}

/**
 * @return void
 */

function clearCircuitType()
{
    $o = new Circuits\CircuitTypes();
    $cts = $o->getList()['body'];

    foreach( $cts->results as $ct )
    {
        $o->deleteDetail( id: $ct->id );
    }
}

/**
 * @return void
 */

function clearCircuit()
{
    $o = new Circuits\Circuits();
    $cts = $o->getList()['body'];

    foreach( $cts->results as $ct )
    {
        $o->deleteDetail( id: $ct->id );
    }
}

/**
 * @return void
 */

function clearContactGroup()
{
    $o = new Tenancy\ContactGroups();
    $groups = $o->getList()['body'];

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}

/**
 * @return void
 */

function clearContact()
{
    $o = new Tenancy\Contacts();
    $contacts = $o->getList()['body'];

    foreach( $contacts->results as $contact )
    {
        $o->deleteDetail( id: $contact->id );
    }
}

/**
 * @return void
 */

function clearCotactRole()
{
    $o = new Tenancy\ContactRoles();
    $roles = $o->getList()['body'];

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id );
    }
}

/**
 * @return void
 */

function clearCustomLinks()
{
    $o = new Extras\CustomLinks();
    $links = $o->getList()['body'];

    foreach( $links->results as $link )
    {
        $o->deleteDetail( id: $link->id );
    }
}

/**
 * @return void
 */

function clearExportTemplates()
{
    $o = new Extras\ExportTemplates();
    $temps = $o->getList()['body'];

    foreach( $temps->results as $temp )
    {
        $o->deleteDetail( id: $temp->id );
    }
}

/**
 * @return void
 */

function clearTags()
{
    $o = new Extras\Tags();
    $tags = $o->getList()['body'];

    foreach( $tags->results as $tag )
    {
        $o->deleteDetail( id: $tag->id );
    }
}


/**
 * @return void
 */

function clearWirelessLanGroups()
{
    $o = new Wireless\WirelessLanGroups();
    $groups = $o->getList()['body'];

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}
