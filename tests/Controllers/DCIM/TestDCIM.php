<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestDCIM extends TestCase
{

/* DCIM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createSite() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Sites();
        $d = new Data\DCIM\Sites();
        $d->set( 'name', 'PHPUnit_Site-' . $rand );
        $d->set( 'slug', 'PHPUnit_Site-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeSite( int $id ) : void
    {
        $o = new Controllers\DCIM\Sites();
        $o->delete( id: $id );
    }


/* DCIM
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createManufacturer() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Manufacturers();
        $d = new Data\DCIM\Manufacturers();
        $d->set( 'name', 'PHPUnit_Manufacturer-' . $rand );
        $d->set( 'slug', 'PHPUnit_Manufacturer-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeManufacturer( int $id ) : void
    {
        $o = new Controllers\DCIM\Manufacturers();
        $o->delete( id: $id );
    }


/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPlatform() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Platforms();
        $d = new Data\DCIM\Platforms();
        $d->set( 'name', 'PHPUnit_Platform-' . $rand );
        $d->set( 'slug', 'PHPUnit_Platform-' . $rand );

        return $o->create( data: $d );
    }

    public static function removePlatform( int $id ) : void
    {
        $o = new Controllers\DCIM\Platforms();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRegion() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Regions();
        $d = new Data\DCIM\Regions();
        $d->set( 'name', 'PHPUnit_Region-' . $rand );
        $d->set( 'slug', 'PHPUnit_Region-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeRegion( int $id ) : void
    {
        $o = new Controllers\DCIM\Regions();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createVirtualChassis() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\VirtualChassis();
        $d = new Data\DCIM\VirtualChassis();
        $d->set( 'name', 'PHPUnit_VirtualChassis-' . $rand );
        $d->set( 'slug', 'PHPUnit_VirtualChassis-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeVirtualChassis( int $id ) : void
    {
        $o = new Controllers\DCIM\VirtualChassis();
        $o->delete( id: $id );
    }


/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createSiteGroup() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\SiteGroups();
        $d = new Data\DCIM\SiteGroups();
        $d->set( 'name', 'PHPUnit_SiteGroups-' . $rand );
        $d->set( 'slug', 'PHPUnit_SiteGroups-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeSiteGroup( int $id ) : void
    {
        $o = new Controllers\DCIM\SiteGroups();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createDeviceRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\DeviceRoles();
        $d = new Data\DCIM\DeviceRoles();
        $d->set( 'name', 'PHPUnit_DeviceRole-' . $rand );
        $d->set( 'slug', 'PHPUnit_DeviceRole-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeDeviceRole( int $id ) : void
    {
        $o = new Controllers\DCIM\DeviceRoles();
        $o->delete( id: $id );
    }


/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createInventoryItemRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\InventoryItemRoles();
        $d = new Data\DCIM\InventoryItemRoles();
        $d->set( 'name', 'PHPUnit_InventoryItemRole-' . $rand );
        $d->set( 'slug', 'PHPUnit_InventoryItemRole-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeInventoryItemRole( int $id ) : void
    {
        $o = new Controllers\DCIM\InventoryItemRoles();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRackRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\RackRoles();
        $d = new Data\DCIM\RackRoles();
        $d->set( 'name', 'PHPUnit_RackRole-' . $rand );
        $d->set( 'slug', 'PHPUnit_RackRole-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeRackRole( int $id ) : void
    {
        $o = new Controllers\DCIM\RackRoles();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createConsolePortTemplate( int $devtype_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ConsolePortTemplates();
        $d = new Data\DCIM\ConsolePortTemplates();
        $d->set( 'name', 'PHPUnit_ConsolePortTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removeConsolePortTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\ConsolePortTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createDeviceType( int $manf_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\DeviceTypes();
        $d = new Data\DCIM\DeviceTypes();
        $d->set( 'model', 'PHPUnit_DeviceType-' . $rand );
        $d->set( 'slug',  'PHPUnit_DeviceType-' . $rand );
        $d->set( 'subdevice_role', 'parent' );
        $d->set( 'manufacturer', $manf_id );

        return $o->create( data: $d );
    }

    public static function removeDeviceType( int $id ) : void
    {
        $o = new Controllers\DCIM\DeviceTypes();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createLocation( int $site_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Locations();
        $d = new Data\DCIM\Locations();
        $d->set( 'name', 'PHPUnit_Location-' . $rand );
        $d->set( 'slug',  'PHPUnit_Location-' . $rand );
        $d->set( 'site', $site_id);

        return $o->create( data: $d );
    }

    public static function removeLocation( int $id ) : void
    {
        $o = new Controllers\DCIM\Locations();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createModuleType( int $manf_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ModuleTypes();
        $d = new Data\DCIM\ModuleTypes();
        $d->set( 'model', 'PHPUnit_ModuleType-' . $rand );
        $d->set( 'manufacturer', $manf_id);

        return $o->create( data: $d );
    }

    public static function removeModuleType( int $id ) : void
    {
        $o = new Controllers\DCIM\ModuleTypes();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRack( int $site_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Racks();
        $d = new Data\DCIM\Racks();
        $d->set( 'name', 'PHPUnit_Rack-' . $rand );
        $d->set( 'site', $site_id );

        return $o->create( data: $d );
    }

    public static function removeRack( int $id ) : void
    {
        $o = new Controllers\DCIM\Racks();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRearPortTemplate( int $type_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\RearPortTemplates();
        $d = new Data\DCIM\RearPortTemplates();
        $d->set( 'name', 'PHPUnit_RearPortTempl-' . $rand );
        $d->set( 'type', '8p8c' );
        $d->set( 'device_type', $type_id );

        return $o->create( data: $d );
    }

    public static function removeRearPortTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\RearPortTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createDevice(
        int $site_id,
        int $devtype_id,
        int $role_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Devices();
        $d = new Data\DCIM\Devices();
        $d->set( 'name', 'PHPUnit_Device-' . $rand );
        $d->set( 'device_type', $devtype_id );
        $d->set( 'site', $site_id );
        $d->set( 'role', $role_id );

        return $o->create( data: $d );
    }

    public static function removeDevice( int $id ) : void
    {
        $o = new Controllers\DCIM\Devices();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createConsolePort(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ConsolePorts();
        $d = new Data\DCIM\ConsolePorts();
        $d->set( 'name', 'PHPUnit_ConsolePort-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removeConsolePort( int $id ) : void
    {
        $o = new Controllers\DCIM\ConsolePorts();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createConsoleServerPort(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ConsoleServerPorts();
        $d = new Data\DCIM\ConsoleServerPorts();
        $d->set( 'name', 'PHPUnit_ConsoleServerPort-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removeConsoleServerPort( int $id ) : void
    {
        $o = new Controllers\DCIM\ConsoleServerPorts();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createConsoleServerPortTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ConsoleServerPortTemplates();
        $d = new Data\DCIM\ConsoleServerPortTemplates();
        $d->set( 'name', 'PHPUnit_ConsoleServerPortTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removeConsoleServerTemplatePort( int $id ) : void
    {
        $o = new Controllers\DCIM\ConsoleServerPortTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createDeviceBay(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\DeviceBays();
        $d = new Data\DCIM\DeviceBays();
        $d->set( 'name', 'PHPUnit_DeviceBay-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removeDeviceBay( int $id ) : void
    {
        $o = new Controllers\DCIM\DeviceBays();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createDeviceBayTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\DeviceBayTemplates();
        $d = new Data\DCIM\DeviceBayTemplates();
        $d->set( 'name', 'PHPUnit_DeviceBayTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removeDeviceBayTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\DeviceBayTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createInterface(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Interfaces();
        $d = new Data\DCIM\Interfaces();
        $d->set( 'name', 'PHPUnit_Interface-' . $rand );
        $d->set( 'device', $device_id );
        $d->set( 'type', 'ieee802.11ac' );

        return $o->create( data: $d );
    }

    public static function removeInterface( int $id ) : void
    {
        $o = new Controllers\DCIM\Interfaces();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createInterfaceTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\InterfaceTemplates();
        $d = new Data\DCIM\InterfaceTemplates();
        $d->set( 'name', 'PHPUnit_InterfaceTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );
        $d->set( 'type', 'other' );

        return $o->create( data: $d );
    }

    public static function removeInterfaceTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\InterfaceTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createInventoryItem(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\InventoryItems();
        $d = new Data\DCIM\InventoryItems();
        $d->set( 'name', 'PHPUnit_InventoryItem-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removeInventoryItem( int $id ) : void
    {
        $o = new Controllers\DCIM\InventoryItems();
        $o->delete( id: $id );
    }



    /* DCIM -
    ---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createInventoryItemTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\InventoryItemTemplates();
        $d = new Data\DCIM\InventoryItemTemplates();
        $d->set( 'name', 'PHPUnit_InventoryItemTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removeInventoryItemTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\InventoryItemTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createModuleBay(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ModuleBays();
        $d = new Data\DCIM\ModuleBays();
        $d->set( 'name', 'PHPUnit_ModuleBay-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removeModuleBay( int $id ) : void
    {
        $o = new Controllers\DCIM\ModuleBays();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createModuleBayTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\ModuleBayTemplates();
        $d = new Data\DCIM\ModuleBayTemplates();
        $d->set( 'name', 'PHPUnit_ModuleBayTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removeModuleBayTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\ModuleBayTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createModule(
        int $device_id,
        int $modbay_id,
        int $modtype_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\Modules();
        $d = new Data\DCIM\Modules();
        $d->set( 'name', 'PHPUnit_Module-' . $rand );
        $d->set( 'device', $device_id );
        $d->set( 'module_bay', $modbay_id );
        $d->set( 'module_type', $modtype_id );

        return $o->create( data: $d );
    }

    public static function removeModule( int $id ) : void
    {
        $o = new Controllers\DCIM\Modules();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPowerPanel( int $site_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\PowerPanels();
        $d = new Data\DCIM\PowerPanels();
        $d->set( 'name', 'PHPUnit_PowerPanel-' . $rand );
        $d->set( 'site', $site_id);

        return $o->create( data: $d );
    }

    public static function removePowerPanel( int $id ) : void
    {
        $o = new Controllers\DCIM\PowerPanels();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPowerFeed( int $panel_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\PowerFeeds();
        $d = new Data\DCIM\PowerFeeds();
        $d->set( 'name', 'PHPUnit_PowerFeed-' . $rand );
        $d->set( 'power_panel', $panel_id );

        return $o->create( data: $d );
    }

    public static function removePowerFeed( int $id ) : void
    {
        $o = new Controllers\DCIM\PowerFeeds();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPowerOutlet(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\PowerOutlets();
        $d = new Data\DCIM\PowerOutlets();
        $d->set( 'name', 'PHPUnit_PowerOutlet-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removePowerOutlet( int $id ) : void
    {
        $o = new Controllers\DCIM\PowerOutlets();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPowerOutletTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\PowerOutletTemplates();
        $d = new Data\DCIM\PowerOutletTemplates();
        $d->set( 'name', 'PHPUnit_PowerOutletTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removePowerOutletTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\PowerOutletTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPowerPortTemplate(
        int $devtype_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\PowerPortTemplates();
        $d = new Data\DCIM\PowerPortTemplates();
        $d->set( 'name', 'PHPUnit_PowerPortTemplate-' . $rand );
        $d->set( 'device_type', $devtype_id );

        return $o->create( data: $d );
    }

    public static function removePowerPortTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\PowerPortTemplates();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createPowerPort(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\PowerPorts();
        $d = new Data\DCIM\PowerPorts();
        $d->set( 'name', 'PHPUnit_PowerPort-' . $rand );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removePowerPort( int $id ) : void
    {
        $o = new Controllers\DCIM\PowerPorts();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRearPort(
        int $device_id,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\RearPorts();
        $d = new Data\DCIM\RearPorts();
        $d->set( 'name', 'PHPUnit_RearPort-' . $rand );
        $d->set( 'type', '8p8c' );
        $d->set( 'device', $device_id );

        return $o->create( data: $d );
    }

    public static function removeRearPort( int $id ) : void
    {
        $o = new Controllers\DCIM\RearPorts();
        $o->delete( id: $id );
    }




/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createFrontPort(
        int $device_id,
        int $read_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\FrontPorts();
        $d = new Data\DCIM\FrontPorts();
        $d->set( 'name', 'PHPUnit_FrontPort-' . $rand );
        $d->set( 'type', '8p8c' );
        $d->set( 'device', $device_id );
        $d->set( 'rear_port', $read_id );

        return $o->create( data: $d );
    }

    public static function removeFrontPort( int $id ) : void
    {
        $o = new Controllers\DCIM\FrontPorts();
        $o->delete( id: $id );
    }



/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createFrontPortTemplate(
        int $type_id,
        int $rear_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\FrontPortTemplates();
        $d = new Data\DCIM\FrontPortTemplates();
        $d->set( 'name', 'PHPUnit_FrontPortTemplate-' . $rand );
        $d->set( 'device_type', $type_id );
        $d->set( 'rear_port', $rear_id );
        $d->set( 'type', '8p8c' );

        return $o->create( data: $d );
    }

    public static function removeFrontPortTemplate( int $id ) : void
    {
        $o = new Controllers\DCIM\FrontPortTemplates();
        $o->delete( id: $id );
    }




/* DCIM -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createRackReservation(
        int $rack_id,
        int $user_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\DCIM\RackReservations();
        $d = new Data\DCIM\RackReservations();
        $d->set( 'description', 'PHPUnit_RackRes-' . $rand );
        $d->set( 'rack', $rack_id );
        $d->set( 'user', $user_id );
        $d->set( 'units', [1] );

        return $o->create( data: $d );
    }

    public static function removeRackReservation( int $id ) : void
    {
        $o = new Controllers\DCIM\RackReservations();
        $o->delete( id: $id );
    }

}