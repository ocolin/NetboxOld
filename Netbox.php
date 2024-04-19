<?php

declare( strict_types = 1);

namespace Cruzio\lib\Netbox;

require_once __DIR__ . '/vendor/autoload.php';

use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Params\ParamsInterface;

/**
 * STRUCTURE:
 *
 * Circuits
 *      Circuits
 *      Circtuiterminations
 *      CircuitTerminationsPaths
 *      CircuitTypes
 *      ProviderNetworks
 *      Providers
 * DCIM
 *      Cables - Not working yet
 *      CableTerminations - Not working yet
 *      ConsolePorts
 *      ConsolePortTemplates
 *      ConsoleServerPorts
 *      ConsoleServerPortTemplates
 *      DeviceBay
 *      DeviceBayTemplates
 *      DeviceRoles
 *      Devices
 *      DeviceTypes
 *      FrontPorts
 *      FrontPortTemplates
 *      Interfaces
 *      InterfaceTemplates
 *      InventoryItemRoles
 *      InventoryItems
 *      InventoryItemTmplates
 *      Locations
 *      Manufacturers
 *      ModuleBays
 *      ModuleBayTemplates
 *      Mpdules
 *      ModuleTypes
 *      Platforms
 *      PowerFeeds
 *      PowerOutlets
 *      PowerOutletTemplates
 *      PowerPanels
 *      PowerPorts
 *      PowerPortTemplates
 *      RackReservations
 *      RackRoles
 *      Racks
 *      RearPorts
 *      RearPortTemplates
 *      Regions
 *      SiteGroups
 *      Sites
 *      VirtualChassis
 * Extras
 *      ConfigContexts
 *      ContentTypes
 *      CustomFields
 *      CustomLinks
 *      ExportTemplates
 *      ImageAttachments - Not working yet
 *      Tags
 * IPAM
 *      Aggregates
 *      Asns
 *      FhrpGroupAssignments
 *      FhrpGroups
 *      IpAddresses
 *      IpRanges
 *      IpRangesAvailableIps
 *      Prefixes
 *      PrefixesAvailableIps
 *      PrefixesAvailablePrefixes
 *      Rirs
 *      Roles
 *      RouteTargets
 *      Services
 *      ServiceTemplates
 *      VlanGroups
 *      VlandGroupsAvailableVlans
 *      Vlans
 *      Vrfs
 * Tenancy
 *      ContactAssignments
 *      ContactGroups
 *      ContactRoles
 *      Contacts
 *      TenantGroups
 *      Tenants
 * Users
 *      Config
 *      Groups
 *      Tokens
 *      Users
 * Virtualization
 *      ClusterGroups
 *      Clusters
 *      ClusterTypes
 *      Interfaces
 *      VirtualMachines
 * Wireless
 *      WirelessLanGroups
 *      WirelessLans
 *      WirelessLinks
 *
 * -------------------------------
 *
 * CREATE:
 *  Arguments
 *      module - Path to module. Example: DCIM\Sites
 *      data - Enter data two ways, via array or Data object
 *          array - An associative array of parameter names and values
 *          DataInterface - a data object using the Data classes
 *
 * example:
 *      $module = Netbox::create(
 *          module: 'DCIM\Sites',
 *          data: [ 'name' => 'mySite, 'slug' => 'mySlug' ]
 *      );
 *
 * -------------------------------
 *
 * GET:
 *  arguments
 *      module - Path to module. Example: DCIM\Sites
 *      data - Enter data two ways, via array or Params object
 *          array - An associative array of parameter names and values
 *          ParamsInterface - Use a Params class object
 *          id - Optional id value. Without this, gets every object that matches
 *              and with the id, it gets only object with that id
 *
 *  example1 - get all sites:
 *      $module = Netbox::get(
 *           module: 'DCIM\Sites'
 *       );
 *
 *  example2 - Get a site by id:
 *      $module = Netbox::get(
 *            module: 'DCIM\Sites',
 *            id: 1234
 *      );
 *
 * -------------------------------
 *
 * UPDATE:
 *  arguments
 *      module - Path to module. Example: DCIM\Sites
 *      data - Enter data two ways, via array or Data object
 *           array - An associative array of parameter names and values
 *           DataInterface - Use a Data class object
 *           id - Optional id value. Without this, updates every object that matches
 *               and with the id, it updates only object with that id
 *
 * example1 - update a site:
 *       $module = Netbox::update(
 *          module: 'DCIM\Sites',
 *          data: [ 'name' => 'newName' ],
 *          id: 1234
 *        );
 *
 * -------------------------------
 *
 * REPLACE:
 *  arguments
 *      module - Path to module. Example: DCIM\Sites
 *      data - Enter data two ways, via array or Data object
 *            array - An associative array of parameter names and values
 *            DataInterface - Use a Data class object
 *            id - Optional id value. Without this, updates every object that matches
 *                and with the id, it updates only object with that id
 *
 *  example1 - replace a site:
 *        $module = Netbox::replace(
 *           module: 'DCIM\Sites',
 *           data: [ 'name' => 'newName', 'slug' => 'newSlug' ],
 *           id: 1234
 *         );
 *
 * -------------------------------
 *
 * DELETE:
 *  arguments
 *      module - Path to module. Example: DCIM\Sites
 *       data - Enter data two ways, via array or Data object
 *             id - Optional id value. Without this, updates every object that matches
 *                 and with the id, it updates only object with that id
 *
 *   example1 - delete a site:
 *         $module = Netbox::delete(
 *            module: 'DCIM\Sites',
 *            id: 1234
 *          );
 */

class Netbox
{

/* CREATE
----------------------------------------------------------------------------- */

    public static function create( string $module, DataInterface|array $data ) : object
    {
        $o = self::controller( module: $module );

        return $o->create( data: $data );
    }



/* DELETE
----------------------------------------------------------------------------- */

    public static function delete( string $module, int $id )
    {
        $o = self::controller( module: $module );

        return $o->delete( id: $id );
    }



/* GET
----------------------------------------------------------------------------- */

    public static function get(
        string $module,
        ParamsInterface|array $data,
        ?int $id = null
    ) : object
    {
        $o = self::controller( module: $module );

        return $o->get( params: $data, id: $id );
    }



/* REPLACE
----------------------------------------------------------------------------- */

    public static function replace(
        string $module,
        DataInterface|array
        $data,
        ?int $id = null
    ) : object
    {
        $o = self::controller( module: $module );

        return $o->replace( data: $data, id: $id );
    }



/* UPDATE
----------------------------------------------------------------------------- */

    public static function update(
        string $module,
        DataInterface|array $data,
        ?int $id = null
    ) : object
    {
        $o = self::controller( module: $module );

        return $o->update( data: $data, id: $id );
    }



/* OPTIONS
----------------------------------------------------------------------------- */

    public static function options( string $module ) : object
    {
        $o = self::controller( module: $module );

        return $o->options();
    }



/* CREATE CONTROLLER
----------------------------------------------------------------------------- */

    public static function controller( string $module ) : object
    {
        $module = "Cruzio\\lib\\Netbox\\Controllers\\" . $module;

        return new $module();
    }


/* CREATE MODEL
----------------------------------------------------------------------------- */

    public static function model( string $module ) : object
    {
        $module = "Cruzio\\lib\\Netbox\\Models\\" . $module;

        return new $module();
    }

}