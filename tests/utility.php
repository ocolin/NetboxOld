#!/opt/homebrew/opt/php@8.1/bin/php
<?php

declare( strict_types = 1 );
namespace Cruzio\Netbox\Models;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load( __DIR__ . '/.env' );



clearAll();

function clearAll()
{
    clearDevices();
    clearModuleBays();
    clearRacks();
    clearVirtualChassis();
    clearDeviceRole();
    clearLocation();
    clearDeviceType();
    clearTenants();
    clearManufacturers();
    clearSites();
}

function clearDevices()
{
    $o = new DCIM\Devices();
    $devices = $o->getList()['body'];

    foreach( $devices->results as $device )
    {
        $o->deleteDetail( id: $device->id) ;
    }
}

function clearRacks()
{
    $o = new DCIM\Racks();
    $rack = $o->getList()['body'];

    foreach( $rack->results as $rack )
    {
        $o->deleteDetail( id: $rack->id) ;
    }
}

function clearVirtualChassis()
{
    $o = new DCIM\VirtualChassis();
    $chassis = $o->getList()['body'];

    foreach( $chassis->results as $chas )
    {
        $o->deleteDetail( id: $chas->id );
    }
}

function clearDeviceRole()
{
    $o = new DCIM\DeviceRoles();
    $roles = $o->getList()['body'];

    foreach( $roles->results as $role )
    {
        $o->deleteDetail( id: $role->id );
    }
}

function clearLocation()
{
    $o = new DCIM\Locations();
    $locs = $o->getList()['body'];

    foreach( $locs->results as $loc )
    {
        $o->deleteDetail( id: $loc->id );
    }
}

function clearDeviceType()
{
    $o = new DCIM\DeviceTypes();
    $dts = $o->getList()['body'];

    foreach( $dts->results as $dt )
    {
        $o->deleteDetail( id: $dt->id );
    }
}

function clearTenants()
{
    $o = new Tenancy\Tenants();
    $tenants = $o->getList()['body'];

    foreach( $tenants->results as $tenant )
    {
        $o->deleteDetail( id: $tenant->id );
    }
}

function clearManufacturers()
{
    $o = new DCIM\Manufacturers();
    $manfs = $o->getList()['body'];

    foreach( $manfs->results as $manf )
    {
        $o->deleteDetail( id: $manf->id );
    }
}

function clearSites()
{
    $o = new DCIM\Sites();
    $sites = $o->getList()['body'];

    foreach( $sites->results as $site )
    {
        $o->deleteDetail( id: $site->id );
    }
}

function clearModuleBays()
{
    $o = new DCIM\ModuleBays();
    $bays = $o->getList()['body'];

    foreach( $bays->results as $bay )
    {
        $o->deleteDetail( id: $bay->id );
    }
}



