<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models;

use Cruzio\lib\Netbox\Options\Circuits\CircuitTerminations AS CTOptions;
use GuzzleHttp\Exception\GuzzleException;

abstract class testCore extends \PHPUnit\Framework\TestCase
{
        
    public function __construct()
    {
        parent::__construct();
    }



/* USER 
---------------------------------------------------------------------------- */

    public static function createUser() : object
    {
        $o = new Users\Users();
        $d = new \Cruzio\lib\Netbox\Data\Users\Users();
        $d->username = 'PHPUnit_Username-Post';
        $d->password = 'PHPUnit_Password-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyUser(object $user ) :void
    {
        $o = new Users\Users();
        $o->deleteDetail( id: $user->id );
    }



/* CONTACT 
---------------------------------------------------------------------------- */

    public static function createContact() : object
    {
        $o = new Tenancy\Contacts();
        $d = new \Cruzio\lib\Netbox\Data\Tenancy\Contacts();
        $d->name = 'PHPUnit_Contacts-Post';
        
        return$o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContact(object $contact ) :void
    {
        $o = new Tenancy\Contacts();
        $o->deleteDetail( id: $contact->id );
    }



/* CONTACT GROUP
---------------------------------------------------------------------------- */

    public static function createContactGroup() : object
    {
        $o = new Tenancy\ContactGroups();
        $d = new \Cruzio\lib\Netbox\Data\Tenancy\ContactGroups();
        $d->name = 'PHPUnit_ContactGroups-Post';
        $d->slug = 'PHPUnit_ContactGroups-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContactGroup(object $group ) :void
    {
        $o = new Tenancy\ContactGroups();
        $o->deleteDetail( id: $group->id );
    }



/* CONTACT ROLE
---------------------------------------------------------------------------- */

    public static function createContactRole() : object
    {
        $o = new Tenancy\ContactRoles();
        $d = new \Cruzio\lib\Netbox\Data\Tenancy\ContactRoles();
        $d->name = 'PHPUnit_ContactRoles-Post';
        $d->slug = 'PHPUnit_ContactRoles-Post';

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContactRole(object $role ) :void
    {
        $o = new Tenancy\ContactRoles();
        $o->deleteDetail( id: $role->id );
    }



/* PROVIDER
---------------------------------------------------------------------------- */

    public static function createProvider() : object
    {
        $o = new Circuits\Providers();
        $d = new \Cruzio\lib\Netbox\Data\Circuits\Providers();
        $d->name = 'PHPUnit_Provider-Post';
        $d->slug = 'PHPUnit_Provider-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyProvider(object $provider ) :void
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
        $d = new \Cruzio\lib\Netbox\Data\Circuits\Circuits();
        $d->cid = 'PHPUnit_Circuit-Post';
        $d->provider = $provider->id;
        $d->type = $circuit_type->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuit(object $circuit ) :void
    {
        $o = new Circuits\Circuits();
        $o->deleteDetail( id: $circuit->id );
    }


/* CIRCUIT TYPE
---------------------------------------------------------------------------- */

    public static function createCircuitType() : object
    {
        $o = new Circuits\CircuitTypes();
        $d = new \Cruzio\lib\Netbox\Data\Circuits\CircuitTypes();
        $d->name = 'PHPUnit_CircuitType-Post';
        $d->slug = 'PHPUnit_CircuitType-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuitType(object $ct ) :void
    {
        $o = new Circuits\CircuitTypes();
        $o->deleteDetail( id: $ct->id );
    }


/* SITE
---------------------------------------------------------------------------- */

    public static function createSite() : object
    {
        $rand = rand( 1, 100000 );
        $data = new \Cruzio\lib\Netbox\Data\DCIM\Sites();
        $data->name = 'PHPUnit_Site-' . $rand;
        $data->slug = 'PHPUnit_Site-' . $rand;

        
        $o = new DCIM\Sites();
        return $o->postDetail(
            data: $data
        )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroySite(object $site ) :void
    {
        $o = new DCIM\Sites();
        $o->deleteDetail( id: $site->id );
    }



/* DEVICE ROLE
---------------------------------------------------------------------------- */

    public static function createDeviceRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new DCIM\DeviceRoles();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\DeviceRoles();
        $d->name = 'PHPUnit_DeviceRole-' . $rand;
        $d->slug = 'PHPUnit_DeviceRole-' . $rand;

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDeviceRole(object $devrole ) :void
    {
        $o = new DCIM\DeviceRoles();
        $o->deleteDetail( id: $devrole->id );
    }



/* MANUFACTURER
---------------------------------------------------------------------------- */

    public static function createManufacturer() : object
    {
        $rand = rand( 1, 100000 );
        $o = new DCIM\Manufacturers();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\Manufacturers();
        $d->name = 'PHPUnit_Manufacturer-' . $rand;
        $d->slug = 'PHPUnit_Manufacturer-' . $rand;
        return $o->postDetail(
            data: $d
        )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyManufacturer(object $manf ) :void
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
        $d = new \Cruzio\lib\Netbox\Data\DCIM\DeviceTypes();
        $d->model = 'PHPUnit_DeviceType';
        $d->slug = 'PHPUnit_DeviceType';
        $d->subdevice_role = 'parent';
        $d->manufacturer = $manf->id;

        return $o->postDetail( data: $d )->body;

    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDeviceType(object $devtype ) :void
    {
        $o = new DCIM\DeviceTypes();
        $o->deleteDetail( id: $devtype->id );
    }



/* TENANT
---------------------------------------------------------------------------- */

    public static function createTenant() : object
    {
        $o = new Tenancy\Tenants();
        $d = new \Cruzio\lib\Netbox\Data\Tenancy\Tenants();
        $d->name = 'PHPUnit_Tenant-Post';
        $d->slug = 'PHPUnit_Tenant-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyTenant(object $tenant ) :void
    {
        $o = new Tenancy\Tenants();
        $test = $o->deleteDetail( id: $tenant->id );
    }



/* LOCATION
---------------------------------------------------------------------------- */

    public static function createLocation( 
        object $site
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new DCIM\Locations();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\Locations();
        $d->name = 'PHPUnit_Location-' . $rand;
        $d->slug = 'PHPUnit_Location-' . $rand;
        $d->site = $site->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyLocation(object $location ) : void
    {
        $o = new DCIM\Locations();
        $o->deleteDetail( id: $location->id );
    }



/* RACK
---------------------------------------------------------------------------- */

    public static function createRack( 
        object $site,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new DCIM\Racks();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\Racks();
        $d->name = 'PHPUnit_Rack-' . $rand;
        $d->site = $site->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRack(object $rack ) : void
    {
        $o = new DCIM\Racks();
        $o->deleteDetail( id: $rack->id );
    }


/* RIR
---------------------------------------------------------------------------- */

    public static function createRir() : object
    {
        $o = new IPAM\Rirs();
        $d = new \Cruzio\lib\Netbox\Data\IPAM\Rirs();
        $d->name = 'PHPUnit_Rirs-Post';
        $d->slug = 'PHPUnit_Rirs-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRir(object $rir ) : void
    {
        $o = new IPAM\Rirs();
        $o->deleteDetail( id: $rir->id );
    }



/* VIRTUAL CHASSIS
---------------------------------------------------------------------------- */

    public static function createVirtualChassis() : object
    {
        $rand = rand( 1, 100000 );
        $o = new DCIM\VirtualChassis();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\VirtualChassis();
        $d->name = 'PHPUnit_VChas-' . $rand;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVirtualChassis(object $chassis ) : void
    {
        $o = new DCIM\VirtualChassis();
        $o->deleteDetail( id: $chassis->id );
    }



/* MOBILE BAY
---------------------------------------------------------------------------- */

    public static function createModuleBay( object $device ) : object
    {
        $o = new DCIM\ModuleBays();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\ModuleBays();
        $d->name = 'PHPUnit_ModBay-Post';
        $d->device = $device->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyModuleBay(object $bay ) : void
    {
        $o = new DCIM\ModuleBays();
        $o->deleteDetail( id: $bay->id );
    }



/* MOBILE TYPE
---------------------------------------------------------------------------- */

    public static function createModuleType( object $manufacturer ) : object
    {
        $o = new DCIM\ModuleTypes();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\ModuleTypes();
        $d->model = 'PHPUnit_ModelTypePut';
        $d->manufacturer = $manufacturer->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyModuleType(object $modtype ) : void
    {
        $o = new DCIM\ModuleTypes();
        $o->deleteDetail( id: $modtype->id );
    }


/* POWER PANEL
---------------------------------------------------------------------------- */

    public static function createPowerPanel( object $site ) : object
    {
        $o = new DCIM\PowerPanels();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\PowerPanels();
        $d->name = 'PHPUnit_PowerPanel';
        $d->slug = 'PHPUnit_PowerPanel';
        $d->site = $site->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyPowerPanel(object $panel ) : void
    {
        $o = new DCIM\PowerPanels();
        $o->deleteDetail( id: $panel->id );
    }



/* DEVICE
---------------------------------------------------------------------------- */

    public static function createDevice( 
        object $site,
        object $devicetype,
        object $devicerole,
    ) : object
    {
        $rand = rand( 0, 100000 );
        $o = new DCIM\Devices();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\Devices();
        $d->name = 'PHPUnit_Device-' . $rand;
        $d->device_type = $devicetype->id;
        $d->site = $site->id;
        $d->role = $devicerole->id;

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDevice(object $device ) :void
    {
        $o = new DCIM\Devices();
        $o->deleteDetail( id: $device->id );    
    }



/* INTERFACE
---------------------------------------------------------------------------- */

    public static function createInterface( object $device )
    {
        $rand = rand( 0,100000 );
        $o = new DCIM\Interfaces();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\Interfaces();
        $d->name = 'PHPUnit_Interface-Post-' . $rand;
        $d->device = $device->id;
        $d->type = 'ieee802.11ac';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyInterface(object $interface )
    {
        $o = new DCIM\Interfaces();
        $o->deleteDetail( id: $interface->id );
    }


/* WIRELESS LAN
---------------------------------------------------------------------------- */

    public static function createWirelessLan()
    {
        $rand = rand( 1, 100000 );
        $o = new Wireless\WirelessLans();
        $d = new \Cruzio\lib\Netbox\Data\Wireless\WirelessLans();
        $d->ssid = "PHPUnit_SSID-Post";
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyWirelessLan(object $lan )
    {
        $o = new Wireless\WirelessLans();
        $o->deleteDetail( id: $lan->id );
    }

    

/* CIRCUIT TERMINATION
---------------------------------------------------------------------------- */

    public static function createCircuitTermination( 
        object $circuit, 
        object $site,
        string $term = 'A'
    ) : object
    {
        $o = new Circuits\CircuitTerminations();
        $d = new \Cruzio\lib\Netbox\Data\Circuits\CircuitTerminations();
        $d->circuit = $circuit->id;
        $d->site = $site->id;
        $d->term_side = $term;

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuitTermination(object $term )
    {
        $o = new Circuits\CircuitTerminations();
        $o->deleteDetail( id: $term->id );
    }



/* REAR PORT
---------------------------------------------------------------------------- */

    public static function createRearPort( object $device ) : object
    {
        $o = new DCIM\RearPorts();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\RearPorts();
        $d->name = 'PHPUnit_RearPort-Post';
        $d->type = '8p8c';
        $d->device = $device->id;
        return $o->postDetail( data: $d )->body;
    }


    /**
     * @throws GuzzleException
     */
    public static function destroyRearPorts(object $port ) : void
    {
        $o = new DCIM\RearPorts();
        $o->deleteDetail( id: $port->id );
    }


/* REAR PORT TEMPLATE
---------------------------------------------------------------------------- */

    public static function createRearPortTemplate( object $device_type ) : object
    {
        $o = new DCIM\RearPortTemplates();
        $d = new \Cruzio\lib\Netbox\Data\DCIM\RearPortTemplates();
        $d->name = 'PHPUnit_RearPortTempl-Post';
        $d->type = '8p8c';
        $d->device_type = $device_type->id;
        
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRearPortsTemplate(object $temp ) : void
    {
        $o = new DCIM\RearPortTemplates();
        $o->deleteDetail( id: $temp->id );
    }



/* CLUSTER TYPE
---------------------------------------------------------------------------- */

    public static function createClusterType() : object
    {
        $o = new Virtualization\ClusterTypes();
        $d = new \Cruzio\lib\Netbox\Data\Virtualization\ClusterTypes();
        $d->name = 'PHPUnit_ClusterType-Post';
        $d->slug = 'PHPUnit_ClusterType-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyClusterType(object $type ) : void
    {
        $o = new Virtualization\ClusterTypes();
        $o->deleteDetail( id: $type->id );
    }



/* CLUSTER GROUP
---------------------------------------------------------------------------- */

    public static function createClusterGroup() : object
    {
        $o = new Virtualization\ClusterGroups();
        $d = new \Cruzio\lib\Netbox\Data\Virtualization\ClusterGroups();
        $d->name = 'PHPUnit_ClusterGroups-Post';
        $d->slug = 'PHPUnit_ClusterGroups-Post';

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyClusterGroup(object $group ) : void
    {
        $o = new Virtualization\ClusterGroups();
        $o->deleteDetail( id: $group->id );
    }



/* CLUSTER
---------------------------------------------------------------------------- */

    public static function createCluster(
        object $type,
        object $group,
        object $site
    ) : object
    {
        $o = new Virtualization\Clusters();
        $d = new \Cruzio\lib\Netbox\Data\Virtualization\Clusters();
        $d->name = 'PHPUnit_Clusters-Post';
        $d->type  = $type->id;
        $d->group = $group->id;
        $d->site  = $site->id;
        
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCluster(object $cluster ) : void
    {
        $o = new Virtualization\Clusters();
        $o->deleteDetail( id: $cluster->id );
    }



/* VIRTUAL MACHINE
---------------------------------------------------------------------------- */

    public static function createVM( object $cluster ) : object
    {
        $o = new Virtualization\VirtualMachines();
        $d = new \Cruzio\lib\Netbox\Data\Virtualization\VirtualMachines();
        $d->name = 'PHPUnit_VirtualMachines-Post';
        $d->cluster = $cluster->id;
        return $o->postDetail( data: $d )->body;

    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVM(object $vm ) : void
    {
        $o = new Virtualization\VirtualMachines();
        $o->deleteDetail( id: $vm->id );
    }



/* FHRP GROUP
---------------------------------------------------------------------------- */

    public static function createFhrpGroup() : object
    {
        $rand = rand( 1, 10000 );
        $o = new IPAM\FhrpGroups();
        $d = new \Cruzio\lib\Netbox\Data\IPAM\FhrpGroups();
        $d->protocol = 'vrrp2';
        $d->group_id = $rand;
        $d->description = 'PHPUnit_FhrpGroupPost-' . $rand;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyFhrpGroup(object $group ) : void
    {
        $o = new IPAM\FhrpGroups();
        $o->deleteDetail( id: $group->id );
    }


/* IP RANGE
---------------------------------------------------------------------------- */

    public static function createIpRange() : object
    {
        $o = new IPAM\IpRanges();
        $d = new \Cruzio\lib\Netbox\Data\IPAM\IpRanges();
        $d->start_address = '192.168.77.0/24';
        $d->end_address   = '192.168.77.254/24';
        $d->description   = 'PHPUnit_IpRange-Post';
        return $o->postDetail( data: $d)->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyIpRange(object $range ) : void
    {
        $o = new IPAM\IpRanges();
        $o->deleteDetail( id: $range->id );
    }



/* IP ADDRESS
---------------------------------------------------------------------------- */

    public static function createIpAddress() : object
    {
        $rand = rand( 2, 254 );
        $o = new IPAM\IpAddresses();
        $d = new \Cruzio\lib\Netbox\Data\IPAM\IpAddresses();
        $d->address = "192.168.44.{$rand}/24";
        $d->description = 'PHPUnit_IP-Post-' . $rand;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyIpAddress(object $ip ) : void
    {
        $o = new IPAM\IpAddresses();
        $o->deleteDetail( id: $ip->id );
    }



/* PREFIX
---------------------------------------------------------------------------- */

    public static function createPrefix() : object
    {
        $o = new IPAM\Prefixes();
        $d = new \Cruzio\lib\Netbox\Data\IPAM\Prefixes();
        $d->prefix = '192.168.1.0/24';
        $d->description = 'PHPUnit_IpRangeAvaIPs-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyPrefix(object $prefix ) : void
    {
        $o = new IPAM\Prefixes();
        $o->deleteDetail( id: $prefix->id );
    }


/* VLAN GROUP
---------------------------------------------------------------------------- */

    public static function createVlanGroup() : object
    {
        $o = new IPAM\VlanGroups();
        $d = new \Cruzio\lib\Netbox\Data\IPAM\VlanGroups();
        $d->name = 'PHPUnit_VlanGroup-Post';
        $d->slug = 'PHPUnit_VlanGroup-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVlanGroup(object $group ) : void
    {
        $o = new IPAM\VlanGroups();
        $o->deleteDetail( id: $group->id );
    }

}