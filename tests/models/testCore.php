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

/* CONTACT GROUP
---------------------------------------------------------------------------- */

    public static function createContactGroup() : object
    {
        $o = new Tenancy\ContactGroups();
        return $o->postDetail(
              name: 'PHPUnit_ContactGrp',
              slug: 'PHPUnit_ContactGrp',
            parent: null
        )['body'];
    }

    public static function destroyContactGroup( object $group ) :void
    {
        $o = new Tenancy\ContactGroups();
        $o->deleteDetail( id: $group->id );
    }



/* PROVIDER
---------------------------------------------------------------------------- */

    public static function createProvider() : object
    {
        $o = new Circuits\Providers();
        return $o->postDetail(
            name: 'PHPUnit_Provider',
            slug: 'PHPUnit_Provider'
        )['body'];
    }

    public static function destroyProvider( object $provider ) :void
    {
        $o = new Circuits\Providers();
        $o->deleteDetail( id: $provider->id );
    }


/* CIRCUIT
---------------------------------------------------------------------------- */

    public static function createCircuit(
        object $provider,
        object $circuit_type
    ) : object
    {
        $o = new Circuits\Circuits();
        return $o->postDetail(
                     cid: 'PHPUnit_Circuit',
                provider: $provider->id,
                    type: $circuit_type->id
        )['body'];
    }

    public static function destroyCircuit( object $circuit ) :void
    {
        $o = new Circuits\Circuits();
        $o->deleteDetail( id: $circuit->id );
    }




/* CIRCUIT TYPE
---------------------------------------------------------------------------- */

    public static function createCircuitType() : object
    {
        $o = new Circuits\CircuitTypes();
        return $o->postDetail(
            name: 'PHPUnit_CrtType',
            slug: 'PHPUnit_CrtType'
        )['body'];
    }

    public static function destroyCircuitType( object $ct ) :void
    {
        $o = new Circuits\CircuitTypes();
        $o->deleteDetail( id: $ct->id );
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
        $o = new DCIM\DeviceTypes();
        return $o->postDetail(
            manufacturer: $manf->id,
                   model: 'PHPUnit_DeviceType',
                    slug: 'PHPUnit_DeviceType',
                 options: [ 'subdevice_role' => 'parent' ]
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



/* MOBILE BAY
---------------------------------------------------------------------------- */

    public static function createModuleBay( object $device ) : object
    {
        $o = new DCIM\ModuleBays();
        return $o->postDetail( 
            name: 'PHPUnit_Modbay', 
            device: $device->id 
        )['body'];
    }

    public static function destroyModuleBay( object $bay ) : void
    {
        $o = new DCIM\ModuleBays();
        $o->deleteDetail( id: $bay->id );
    }



/* MOBILE TYPE
---------------------------------------------------------------------------- */

    public static function createModuleType( object $manufacturer ) : object
    {
        $o = new DCIM\ModuleTypes();
        return $o->postDetail(
            manufacturer: $manufacturer->id,
                   model: 'PHPUnit_ModType'
        )['body'];
    }

    public static function destroyModuleType( object $modtype ) : void
    {
        $o = new DCIM\ModuleTypes();
        $o->deleteDetail( id: $modtype->id );
    }


/* POWER PANEL
---------------------------------------------------------------------------- */

    public static function createPowerPanel( object $site ) : object
    {
        $o = new DCIM\PowerPanels();
        return $o->postDetail( 
            name: 'PHPUnit_PowerPanel',
            site: $site->id
        )['body'];
    }

    public static function destroyPowerPanel( object $panel ) : void
    {
        $o = new DCIM\PowerPanels();
        $o->deleteDetail( id: $panel->id );
    }



/* DEVICE
---------------------------------------------------------------------------- */

    public static function createDevice( 
        object $site,
        object $tenant,
        object $devicetype,
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
