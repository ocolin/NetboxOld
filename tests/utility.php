<?php

declare( strict_types = 1 );
namespace Cruzio\lib\Netbox\Models;
//use Symfony\Component\Dotenv\Dotenv;

use GuzzleHttp\Exception\GuzzleException;

require_once __DIR__ . '/../vendor/autoload.php';



clearAll();



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
    $devices = $o->getList()->body;

    foreach( $devices->results as $device )
    {
        $o->deleteDetail( id: $device->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearIpRanges() : void
{
    $o = new IPAM\IpRanges();
    $ranges = $o->getList()->body;

    foreach( $ranges->results as $range )
    {
        $o->deleteDetail( id: $range->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearIpAddresses() : void
{
    $o = new IPAM\IpAddresses();
    $ips = $o->getList()->body;

    foreach( $ips->results as $ip )
    {
        $o->deleteDetail( id: $ip->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearVirtualMachines() : void
{
    $o = new Virtualization\VirtualMachines();
    $machs = $o->getList()->body;

    foreach( $machs->results as $mach )
    {
        $o->deleteDetail( id: $mach->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearClusterTypes() : void
{
    $o = new Virtualization\ClusterTypes();
    $types = $o->getList()->body;

    foreach( $types->results as $type )
    {
        $o->deleteDetail( id: $type->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearClusterGroups() : void
{
    $o = new Virtualization\ClusterGroups();
    $groups = $o->getList()->body;

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearClusters() : void
{
    $o = new Virtualization\Clusters();
    $clusters = $o->getList()->body;

    foreach( $clusters->results as $cluster )
    {
        $o->deleteDetail( id: $cluster->id) ;
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearRackRoles() : void
{
    $o = new DCIM\RackRoles();
    $roles = $o->getList()->body;

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id);
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearRacks() : void
{
    $o = new DCIM\Racks();
    $rack = $o->getList()->body;

    foreach( $rack->results as $rack )
    {
        $a = new DCIM\Racks();
        $a->deleteDetail( id: $rack->id) ;
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearVirtualChassis() : void
{
    $o = new DCIM\VirtualChassis();
    $chassis = $o->getList()->body;

    foreach( $chassis->results as $chas )
    {
        $o->deleteDetail( id: $chas->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearDeviceRole() : void
{
    $o = new DCIM\DeviceRoles();
    $roles = $o->getList()->body;

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearLocation() : void
{
    $o = new DCIM\Locations();
    $locs = $o->getList()->body;

    foreach( $locs->results as $loc )
    {
        $o->deleteDetail( id: $loc->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearDeviceType() : void
{
    $o = new DCIM\DeviceTypes();
    $dts = $o->getList()->body;

    foreach( $dts->results as $dt )
    {
        $a = new DCIM\DeviceTypes();
        $test = $a->deleteDetail( id: $dt->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearTenants() : void
{
    $o = new Tenancy\Tenants();
    $tenants = $o->getList()->body;

    foreach( $tenants->results as $tenant )
    {
        $o->deleteDetail( id: $tenant->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearManufacturers() : void
{
    $o = new DCIM\Manufacturers();
    $manfs = $o->getList()->body;

    foreach( $manfs->results as $manf )
    {
       $test = $o->deleteDetail( id: $manf->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearPlatforms() : void
{
    $o = new DCIM\Platforms();
    $platforms = $o->getList()->body;

    foreach( $platforms->results as $platform )
    {
       $test = $o->deleteDetail( id: $platform->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearSites() : void
{
    $o = new DCIM\Sites();
    $sites = $o->getList()->body;

    foreach( $sites->results as $site )
    {
        $a = new DCIM\Sites();
        $a->deleteDetail( id: $site->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearModuleBays() : void
{
    $o = new DCIM\ModuleBays();
    $bays = $o->getList()->body;

    foreach( $bays->results as $bay )
    {
        $o->deleteDetail( id: $bay->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearProviders() : void
{
    $o = new Circuits\Providers();
    $provs = $o->getList()->body;

    foreach( $provs->results as $prov )
    {
        $test = $o->deleteDetail( id: $prov->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearProviderNetworks() : void
{
    $o = new Circuits\ProviderNetworks();
    $provs = $o->getList()->body;

    foreach( $provs->results as $prov )
    {
        $test = $o->deleteDetail( id: $prov->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCircuitType() : void
{
    $o = new Circuits\CircuitTypes();
    $cts = $o->getList()->body;

    foreach( $cts->results as $ct )
    {
        $o->deleteDetail( id: $ct->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCircuit() : void
{
    $o = new Circuits\Circuits();
    $cts = $o->getList()->body;

    foreach( $cts->results as $ct )
    {
        $o->deleteDetail( id: $ct->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearContactGroup() : void
{
    $o = new Tenancy\ContactGroups();
    $groups = $o->getList()->body;

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearContact() : void
{
    $o = new Tenancy\Contacts();
    $contacts = $o->getList()->body;

    foreach( $contacts->results as $contact )
    {
        $o->deleteDetail( id: $contact->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCotactRole() : void
{
    $o = new Tenancy\ContactRoles();
    $roles = $o->getList()->body;

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearCustomLinks() : void
{
    $o = new Extras\CustomLinks();
    $links = $o->getList()->body;

    foreach( $links->results as $link )
    {
        $o->deleteDetail( id: $link->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearExportTemplates() : void
{
    $o = new Extras\ExportTemplates();
    $temps = $o->getList()->body;

    foreach( $temps->results as $temp )
    {
        $o->deleteDetail( id: $temp->id );
    }
}

/**
 * @return void
 * @throws GuzzleException
 */

function clearTags() : void
{
    $o = new Extras\Tags();
    $tags = $o->getList()->body;

    foreach( $tags->results as $tag )
    {
        $o->deleteDetail( id: $tag->id );
    }
}


/**
 * @return void
 * @throws GuzzleException
 */

function clearWirelessLanGroups() : void
{
    $o = new Wireless\WirelessLanGroups();
    $groups = $o->getList()->body;

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}

/**
 * @throws GuzzleException
 */
function clearRegions() : void
{
    $o = new DCIM\Regions();
    $regions = $o->getList()->body;

    foreach( $regions->results as $region )
    {
        $o->deleteDetail( id: $region->id );
    }
}

/**
 * @throws GuzzleException
 */
function clearSiteGroups() : void
{
    $o = new DCIM\SiteGroups();
    $groups = $o->getList()->body;

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearPowerPanels() : void
{
    $o = new DCIM\PowerPanels();
    $groups = $o->getList()->body;

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearPowerFeed() : void
{
    $o = new DCIM\PowerFeeds();
    $groups = $o->getList()->body;

    foreach( $groups->results as $group )
    {
        $o->deleteDetail( id: $group->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearRir() : void
{
    $o = new IPAM\Aggregates();
    $a = $o->getList()->body;

    foreach( $a->results as $a )
    {
        $o->deleteDetail( id: $a->id );
    }
}


/**
 * @throws GuzzleException
 */
function clearContactRoles() : void
{
    $o = new Tenancy\ContactRoles();
    $a = $o->getList()->body;

    foreach( $a->results as $a )
    {
        $o->deleteDetail( id: $a->id );
    }
}
