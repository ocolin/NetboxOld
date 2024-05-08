<?php

declare( strict_types = 1 );
namespace Cruzio\lib\Netbox\Models;

use GuzzleHttp\Exception\GuzzleException;

require_once __DIR__ . '/../vendor/autoload.php';


try {
    clearAll();
}
catch (GuzzleException $e) {
    print_r( $e );
}


/**
 * @throws GuzzleException
 */
function clearAll() : void
{
    clearRir();
    clearIpAddresses();
    clearIpRanges();
    //clearVirtualMachines();
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
    clearPowerFeed();
    clearPowerPanels();
    clearProviderNetworks();
    clearProviders();
    clearCircuitType();
    clearCircuit();
    clearContactRoles();
    clearContactGroup();
    clearContact();
    //clearCustomLinks();
    //clearTags();
    clearWirelessLanGroups();
    clearSites();
    clearRegions();
    clearSiteGroups();
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearDevices() : void
{
    $o = new DCIM\Devices();
    $devices = $o->get()->body;

    foreach( $devices->results as $device )
    {
        $o->delete( id: $device->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearIpRanges() : void
{
    $o = new IPAM\IpRanges();
    $ranges = $o->get()->body;

    foreach( $ranges->results as $range )
    {
        $o->delete( id: $range->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearIpAddresses() : void
{
    $o = new IPAM\IpAddresses();
    $ips = $o->get()->body;

    foreach( $ips->results as $ip )
    {
        $o->delete( id: $ip->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearVirtualMachines() : void
{
    $o = new Virtualization\VirtualMachines();
    $machs = $o->get()->body;

    foreach( $machs->results as $mach )
    {
        $o->delete( id: $mach->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearClusterTypes() : void
{
    $o = new Virtualization\ClusterTypes();
    $types = $o->get()->body;

    foreach( $types->results as $type )
    {
        $o->delete( id: $type->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearClusterGroups() : void
{
    $o = new Virtualization\ClusterGroups();
    $groups = $o->get()->body;

    foreach( $groups->results as $group )
    {
        $o->delete( id: $group->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearClusters() : void
{
    $o = new Virtualization\Clusters();
    $clusters = $o->get()->body;

    foreach( $clusters->results as $cluster )
    {
        $o->delete( id: $cluster->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearRackRoles() : void
{
    $o = new DCIM\RackRoles();
    $roles = $o->get()->body;

    foreach( $roles->results as $role )
    {
        $o->delete( id: $role->id);
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearRacks() : void
{
    $o = new DCIM\Racks();
    $rack = $o->get()->body;

    foreach( $rack->results as $rack )
    {
        $a = new DCIM\Racks();
        $a->delete( id: $rack->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearVirtualChassis() : void
{
    $o = new DCIM\VirtualChassis();
    $chassis = $o->get()->body;

    foreach( $chassis->results as $chas )
    {
        $o->delete( id: $chas->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearDeviceRole() : void
{
    $o = new DCIM\DeviceRoles();
    $roles = $o->get()->body;

    foreach( $roles->results as $role )
    {
        $o->delete( id: $role->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearLocation() : void
{
    $o = new DCIM\Locations();
    $locs = $o->get()->body;

    foreach( $locs->results as $loc )
    {
        $o->delete( id: $loc->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearDeviceType() : void
{
    $o = new DCIM\DeviceTypes();
    $dts = $o->get()->body;

    foreach( $dts->results as $dt )
    {
        $a = new DCIM\DeviceTypes();
        $test = $a->delete( id: $dt->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearTenants() : void
{
    $o = new Tenancy\Tenants();
    $tenants = $o->get()->body;

    foreach( $tenants->results as $tenant )
    {
        $o->delete( id: $tenant->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearManufacturers() : void
{
    $o = new DCIM\Manufacturers();
    $manfs = $o->get()->body;

    foreach( $manfs->results as $manf )
    {
       $test = $o->delete( id: $manf->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearPlatforms() : void
{
    $o = new DCIM\Platforms();
    $platforms = $o->get()->body;

    foreach( $platforms->results as $platform )
    {
       $test = $o->delete( id: $platform->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearSites() : void
{
    $o = new DCIM\Sites();
    $sites = $o->get()->body;

    foreach( $sites->results as $site )
    {
        $a = new DCIM\Sites();
        $a->delete( id: $site->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearModuleBays() : void
{
    $o = new DCIM\ModuleBays();
    $bays = $o->get()->body;

    foreach( $bays->results as $bay )
    {
        $o->delete( id: $bay->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearProviders() : void
{
    $o = new Circuits\Providers();
    $provs = $o->get()->body;

    foreach( $provs->results as $prov )
    {
        $test = $o->delete( id: $prov->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearProviderNetworks() : void
{
    $o = new Circuits\ProviderNetworks();
    $provs = $o->get()->body;

    foreach( $provs->results as $prov )
    {
        $test = $o->delete( id: $prov->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCircuitType() : void
{
    $o = new Circuits\CircuitTypes();
    $cts = $o->get()->body;

    foreach( $cts->results as $ct )
    {
        $o->delete( id: $ct->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCircuit() : void
{
    $o = new Circuits\Circuits();
    $cts = $o->get()->body;

    foreach( $cts->results as $ct )
    {
        $o->delete( id: $ct->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearContactGroup() : void
{
    $o = new Tenancy\ContactGroups();
    $groups = $o->get()->body;

    foreach( $groups->results as $group )
    {
        $o->delete( id: $group->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearContact() : void
{
    $o = new Tenancy\Contacts();
    $contacts = $o->get()->body;

    foreach( $contacts->results as $contact )
    {
        $o->delete( id: $contact->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCotactRole() : void
{
    $o = new Tenancy\ContactRoles();
    $roles = $o->get()->body;

    foreach( $roles->results as $role )
    {
        $o->delete( id: $role->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCustomLinks() : void
{
    $o = new Extras\CustomLinks();
    $links = $o->get()->body;

    foreach( $links->results as $link )
    {
        $o->delete( id: $link->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearExportTemplates() : void
{
    $o = new Extras\ExportTemplates();
    $temps = $o->get()->body;

    foreach( $temps->results as $temp )
    {
        $o->delete( id: $temp->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearTags() : void
{
    $o = new Extras\Tags();
    $tags = $o->get()->body;

    foreach( $tags->results as $tag )
    {
        $o->delete( id: $tag->id );
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearWirelessLanGroups() : void
{
    $o = new Wireless\WirelessLanGroups();
    $groups = $o->get()->body;

    foreach( $groups->results as $group )
    {
        $o->delete( id: $group->id );
    }
}

/**
 * @throws GuzzleException
 */
function clearRegions() : void
{
    $o = new DCIM\Regions();
    $regions = $o->get()->body;

    foreach( $regions->results as $region )
    {
        $o->delete( id: $region->id );
    }
}

/**
 * @throws GuzzleException
 */
function clearSiteGroups() : void
{
    $o = new DCIM\SiteGroups();
    $groups = $o->get()->body;

    foreach( $groups->results as $group )
    {
        $o->delete( id: $group->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearPowerPanels() : void
{
    $o = new DCIM\PowerPanels();
    $groups = $o->get()->body;

    foreach( $groups->results as $group )
    {
        $o->delete( id: $group->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearPowerFeed() : void
{
    $o = new DCIM\PowerFeeds();
    $groups = $o->get()->body;

    foreach( $groups->results as $group )
    {
        $o->delete( id: $group->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearRir() : void
{
    $o = new IPAM\Aggregates();
    $a = $o->get()->body;

    foreach( $a->results as $a )
    {
        $o->delete( id: $a->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearContactRoles() : void
{
    $o = new Tenancy\ContactRoles();
    $a = $o->get()->body;

    foreach( $a->results as $a )
    {
        $o->delete( id: $a->id );
    }
}
