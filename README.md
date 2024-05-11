- [Overview](#overview)
- [Environment](#Environment)
- [Functions](#functions)
  - [Options](#OPTIONS)
  - [Create](#CREATE)
  - [Get](#GET)
  - [Update](#UPDATE)
  - [Replace](#REPLACE)
  - [Delete](#DELETE)
- [Custom Fields](#CUSTOM-FIELDS)
- [Structure](#STRUCTURE)
- [Todo](#TODO)

## Overview

Netbox is a datacenter management tool for keeping track of equipment, power, cabling, etc. This is a PHP library to help integrate API calls to a Netbox server. The goal is to make making calls as easy as possible. 

## Environment

This tool requires the following environment variables.

- NETBOX_BASE_URI
- NETBOX_TOKEN

They can be set from either outside of this library, or within a .env file in the root directory. There is a .env.example file that can be used as a template. The .env will be loaded if the environment variables are not already set.

## Functions

### OPTIONS:

Get details on the data provided by a module, what fields are required, the format of each property, etc.

#### Example:

```
  $output = Netbox::options(
    module: 'IPAM\IpAddresses'
  );
```

### CREATE:

Create a new object

- Arguments:
  - **module** - Path to module. Example: DCIM\Sites
  - **data** - Enter data two ways, via array or Data object
    - array - An associative array of parameter names and values
    - DataInterface - a data object using the Data classes

#### Example:
    $output = Netbox::create(
        module: 'DCIM\Sites',
        data: [ 'name' => 'mySite, 'slug' => 'mySlug' ]
    );

### GET:

Get existing objects

- Arguments:
  - **module** - Path to module. Example: DCIM\Sites
  - **data** - Enter data two ways, via array or Params object
    - array - An associative array of parameter names and values
    - ParamsInterface - Use a Params class object
  - **id** - Optional id value. Without this, gets every object that matches and with the id, it gets only object with that id

#### Example 1 - Get all sites:
    $output = Netbox::get(
        module: 'DCIM\Sites'
    );

#### Example 2 - Get site by ID:
    $output = Netbox::get(
        module: 'DCIM\Sites',
            id: 1234
    );

### UPDATE:

Update values in an existing object

 - Arguments:
   - **module** - Path to module. Example: DCIM\Sites
   - **data** - Enter data two ways, via array or Data object
     - array - An associative array of parameter names and values
     - DataInterface - Use a Data class object
   - **id** - Optional id value. Without this, updates every object that matches and with the id, it updates only object with that id

### Example:
    $output = Netbox::update(
        module: 'DCIM\Sites',
        data: [ 'name' => 'newName' ],
        id: 1234
    );

### REPLACE:

Replace an existing object. All required field needed.

- Arguments
  - **module** - Path to module. Example: DCIM\Sites
  - **data** - Enter data two ways, via array or Data object
    - array - An associative array of parameter names and values
    - DataInterface - Use a Data class object
  - **id** - Optional id value. Without this, updates every object that matches and with the id, it updates only object with that id

#### Example:
    $output = Netbox::replace(
        module: 'DCIM\Sites',
        data: [ 'name' => 'newName', 'slug' => 'newSlug' ],
        id: 1234
    );

### DELETE:

Delete an existing object

 - Arguments
   - **module** - Path to module. Example: DCIM\Sites
   - **data** - Enter data two ways, via array or Data object
     - array - An associative array of parameter names and values
     - ParamsInterface - Use a Data class object
   - **id** - ID of existing object to delete

#### Example:
    $output = Netbox::delete(
        module: 'DCIM\Sites',
        id: 1234
    );

## CUSTOM FIELDS

### GET Method

custom fields in GET requests must be appended with 'cf_' to the parameter name. Example:

    $output = Netbox::get(
        module: 'DCIM\Sites',
        data: [
          'cf_pop_id' => 1234
        ]
    );

### Create, Replace, Update methods

With these calls, the custom fields parameter is an array or object called 'custom_fields' containing a list of parameters and value.

    $output = Netbox::get(
        module: 'DCIM\Sites',
        data: [
          'custom_fields' => [
              'pop_id' => 1234
          ]
        ]
    );

## STRUCTURE

- Circuits
  - Circuits
  - CircuitTerminations
  - CircuitTerminasionsPaths
  - CircuitTypes
  - ProviderNetworks
  - Providers
- DCIM
  - ConnectedDevice
  - ConsolePorts
  - ConsolePortTemplates
  - ConsoleServerPorts
  - ConsoleServerPortTemplates
  - DeviceBays
  - DeviceBayTemplates
  - DeviceRoles
  - Devices
  - DeviceTypes
  - FrontPorts
  - FrontPortTemplates
  - Interfaces
  - InterfaceTemplates
  - InventoryItems
  - InventoryItemTemplates
  - Locations
  - Manufacturers
  - ModuleBays
  - ModuleBayTemplates
  - Modules
  - ModuleTypes
  - Platforms
  - PowerFeeds
  - PowerOutlets
  - PowerOutletTemplates
  - PowerPanels
  - PowerPorts
  - PowerPortTemplates
  - RackReservations
  - RackRoles
  - Racks
  - RearPorts
  - RearPortTemplates
  - Regions
  - SiteGroups
  - Sites
  - VirtualChassis
- Extras
  - ConfigContents
  - ContentTypes
  - CustomFields
  - CustomLinks
  - ExportTemplates
  - ImageAttachments
  - Tags
- IPAM
  - Aggregates
  - Asns
  - FhrpGroupAssignments
  - FhrpGroups
  - IpAddresses
  - IpRanges
  - IpRangesAvailableIps
  - Prefixes
  - PrefixesAvailableIps
  - PrefixesAvailablePrefixes
  - Rirs
  - Roles
  - RouteTargets
  - ServiceTemplates
  - VlanGroups
  - VlanGroupsAvailableVlans
  - Vlans
  - Vrfs
- Tenancy
  - ContactAssignments
  - ContactGroups
  - ContactRoles
  - Contacts
  - TenantGroups
  - Tenants
- Users
  - Config
  - Groups
  - Tokens
  - Users
- Virtualization
  - ClusterGroups
  - Clusters
  - ClusterTypes
  - Interfaces
  - VirtualMachines
- Wireless
  - WirelessLanGroups
  - WirelessLans
  - WirelessLinks

### TODO
- DCIM, Cables
- DCIM, CableTerminations
- Extras, ImageAttachments
    