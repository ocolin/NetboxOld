## Functions

### CREATE:

Create a new object

- Arguments:
  - **module** - Path to module. Example: DCIM\Sites
  - **data** - Enter data two ways, via array or Data object
    - array - An associative array of parameter names and values
    - DataInterface - a data object using the Data classes

#### Example:
    $module = Netbox::create(
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
    $module = Netbox::get(
        module: 'DCIM\Sites'
    );

#### Example 2 - Get site by ID:
    $module = Netbox::get(
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
    $module = Netbox::update(
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
    $module = Netbox::replace(
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
    $module = Netbox::delete(
        module: 'DCIM\Sites',
        id: 1234
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
    