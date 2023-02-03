<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models;

use Symfony\Component\Dotenv\Dotenv;

require_once( __DIR__ . '/../../vendor/autoload.php' );

class testCore extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        $dotenv = new Dotenv();
        $dotenv->load( __DIR__ . '/../.env' );
        parent::__construct();
    }



/* SITE
---------------------------------------------------------------------------- */

    public static function createSite() : object
    {
        $o = new DCIM\Sites();
        return $o->postDetail(
            name: 'PHPUnit_Site',
            slug: 'PHPUnit_Site'
        )['body'];
    }

    public static function destroySite( object $site ) :void
    {
        $o = new DCIM\Sites();
        $o->deleteDetail( id: $site->id );
    }



/* DEVICE ROLE
---------------------------------------------------------------------------- */

    public static function createDeviceRole() : object
    {
        $o = new DCIM\DeviceRoles();
        return $o->postDetail(
            name: 'PHPUnit_DeviceRole',
            slug: 'PHPUnit_DeviceRole'
        )['body'];
    }

    public static function destroyDeviceRole( object $devrole ) :void
    {
        $o = new DCIM\DeviceRoles();
        $o->deleteDetail( id: $devrole->id );
    }



/* MANUFACTURER
---------------------------------------------------------------------------- */

    public static function createManufacturer() : object
    {
        $o = new DCIM\Manufacturers();
        return $o->postDetail(
            name: 'PHPUnit_Manufacturer',
            slug: 'PHPUnit_Manufacturer'
        )['body'];
    }

    public static function destroyManufacturer( object $manf ) :void
    {
        $o = new DCIM\Manufacturers();
        $o->deleteDetail( id: $manf->id );
    }



/* DEVICE TYPE
---------------------------------------------------------------------------- */

    public static function createDeviceType( 
        object $manf
    ) : object
    {
        //$manf = $manf ?? self::createManufacturer( label: '_Devtype' );

        $o = new DCIM\DeviceTypes();
        return $o->postDetail(
            manufacturer: $manf->id,
                   model: 'PHPUnit_DeviceType',
                    slug: 'PHPUnit_DeviceType'
        )['body'];
    }

    public static function destroyDeviceType( object $devtype ) :void
    {
        $o = new DCIM\DeviceTypes();
        $o->deleteDetail( id: $devtype->id );

        //self::destroyManufacturer( manf: $devtype->manufacturer );
    }



/* TENANT
---------------------------------------------------------------------------- */

    public static function createTenant() : object
    {
        $o = new Tenancy\Tenants();
        return $o->postDetail(
            name: 'PHPUnit_Tenant',
            slug: 'PHPUnit_Tenant'
        )['body'];
    }

    public static function destroyTenant( object $tenant ) :void
    {
        $o = new Tenancy\Tenants();
        $o->deleteDetail( id: $tenant->id );
    }



/* LOCATION
---------------------------------------------------------------------------- */

    public static function createLocation( 
        object $site
    ) : object
    {
        $o = new DCIM\Locations();
        return $o->postDetail(
            name: 'PHPUnit_Location' ,
            slug: 'PHPUnit_Location',
            site: $site->id
        )['body'];
    }

    public static function destroyLocation( object $location ) : void
    {
        $o = new DCIM\Locations();
        $o->deleteDetail( id: $location->id );
    }



/* RACK
---------------------------------------------------------------------------- */

    public static function createRack( 
        object $site,
        object $location
    ) : object
    {
        $o = new DCIM\Racks();
        return $o->postDetail(
            name: 'PHPUnit_Rack',
            site: $site->id,
            location: $location->id
        )['body'];
    }

    public static function destroyRack( object $rack ) : void
    {
        $o = new DCIM\Racks();
        $o->deleteDetail( id: $rack->id );
    }




/* VIRTUAL CHASSIS
---------------------------------------------------------------------------- */

    public static function createVirtualChassis() : object
    {
        $o = new DCIM\VirtualChassis();
        return $o->postDetail( name: 'PHPUnit_VChas' )['body'];
    }

    public static function destroyVirtualChassis( object $chassis ) : void
    {
        $o = new DCIM\VirtualChassis();
        $o->deleteDetail( id: $chassis->id );
    }



/* DEVICE
---------------------------------------------------------------------------- */

    public static function createDevice( 
        object $site,
        object $tenant,
        object $devicetype,
        object $location,
        object $devicerole,
        object $virtual_chassis,
        object $rack
    ) : object
    {
        $o = new DCIM\Devices();
        return $o->postDetail(
                       name: 'PHPUit_device',
                       face: 'front',
                vc_position: 1,
                       site: $site->id,
                     tenant: $tenant->id,
                device_type: $devicetype->id,
                   location: $location->id,
                device_role: $devicerole->id,
            virtual_chassis: $virtual_chassis->id,
                       rack: $rack->id,
        )['body'];
    }

    public static function destroyDevice( object $device ) :void
    {
        $o = new DCIM\Devices();
        $o->deleteDetail( id: $device->id );    
    }



}
