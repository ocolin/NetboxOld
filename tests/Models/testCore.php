<?php

declare( strict_types = 1 );

namespace Tests\Models;

use Cruzio\lib\Netbox\Models AS Models;
use Cruzio\lib\Netbox\Data AS Data;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Depends;


abstract class testCore extends TestCase
{


/* USER 
---------------------------------------------------------------------------- */

    public static function createUser() : object
    {
        $o = new Models\Users\Users();
        $d = new Data\Users\Users();
        $d->username = 'PHPUnit_Username-Post';
        $d->password = 'PHPUnit_Password-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyUser(object $user ) :void
    {
        $o = new Models\Users\Users();
        $o->deleteDetail( id: $user->id );
    }



/* CONTACT 
---------------------------------------------------------------------------- */

    public static function createContact() : object
    {
        $o = new Models\Tenancy\Contacts();
        $d = new Data\Tenancy\Contacts();
        $d->name = 'PHPUnit_Contacts-Post';
        
        return$o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContact(object $contact ) :void
    {
        $o = new Models\Tenancy\Contacts();
        $o->deleteDetail( id: $contact->id );
    }



/* CONTACT GROUP
---------------------------------------------------------------------------- */

    public static function createContactGroup() : object
    {
        $o = new Models\Tenancy\ContactGroups();
        $d = new Data\Tenancy\ContactGroups();
        $d->name = 'PHPUnit_ContactGroups-Post';
        $d->slug = 'PHPUnit_ContactGroups-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContactGroup(object $group ) :void
    {
        $o = new Models\Tenancy\ContactGroups();
        $o->deleteDetail( id: $group->id );
    }



/* CONTACT ROLE
---------------------------------------------------------------------------- */

    public static function createContactRole() : object
    {
        $o = new Models\Tenancy\ContactRoles();
        $d = new Data\Tenancy\ContactRoles();
        $d->name = 'PHPUnit_ContactRoles-Post';
        $d->slug = 'PHPUnit_ContactRoles-Post';

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContactRole(object $role ) :void
    {
        $o = new Models\Tenancy\ContactRoles();
        $o->deleteDetail( id: $role->id );
    }



/* PROVIDER
---------------------------------------------------------------------------- */

    public static function createProvider() : object
    {
        $o = new Models\Circuits\Providers();
        $d = new Data\Circuits\Providers();
        $d->name = 'PHPUnit_Provider-Post';
        $d->slug = 'PHPUnit_Provider-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyProvider(object $provider ) :void
    {
        $o = new Models\Circuits\Providers();
        $o->deleteDetail( id: $provider->id );
    }


/* CIRCUIT
---------------------------------------------------------------------------- */

    public static function createCircuit(
        object $provider,
        object $circuit_type
    ) : object
    {
        $o = new Models\Circuits\Circuits();
        $d = new Data\Circuits\Circuits();
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
        $o = new Models\Circuits\Circuits();
        $o->deleteDetail( id: $circuit->id );
    }


/* CIRCUIT TYPE
---------------------------------------------------------------------------- */

    public static function createCircuitType() : object
    {
        $o = new Models\Circuits\CircuitTypes();
        $d = new Data\Circuits\CircuitTypes();
        $d->name = 'PHPUnit_CircuitType-Post';
        $d->slug = 'PHPUnit_CircuitType-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuitType(object $ct ) :void
    {
        $o = new Models\Circuits\CircuitTypes();
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

        
        $o = new Models\DCIM\Sites();
        return $o->postDetail(
            data: $data
        )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroySite(object $site ) :void
    {
        $o = new Models\DCIM\Sites();
        $o->deleteDetail( id: $site->id );
    }



/* DEVICE ROLE
---------------------------------------------------------------------------- */

    public static function createDeviceRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\DeviceRoles();
        $d = new Data\DCIM\DeviceRoles();
        $d->name = 'PHPUnit_DeviceRole-' . $rand;
        $d->slug = 'PHPUnit_DeviceRole-' . $rand;

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDeviceRole(object $devrole ) :void
    {
        $o = new Models\DCIM\DeviceRoles();
        $o->deleteDetail( id: $devrole->id );
    }



/* MANUFACTURER
---------------------------------------------------------------------------- */

    public static function createManufacturer() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\Manufacturers();
        $d = new Data\DCIM\Manufacturers();
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
        $o = new Models\DCIM\Manufacturers();
        $o->deleteDetail( id: $manf->id );
    }



/* DEVICE TYPE
---------------------------------------------------------------------------- */

    public static function createDeviceType( 
        object $manf
    ) : object
    {
        $o = new Models\DCIM\DeviceTypes();
        $d = new Data\DCIM\DeviceTypes();
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
        $o = new Models\DCIM\DeviceTypes();
        $o->deleteDetail( id: $devtype->id );
    }



/* TENANT
---------------------------------------------------------------------------- */

    public static function createTenant() : object
    {
        $o = new Models\Tenancy\Tenants();
        $d = new Data\Tenancy\Tenants();
        $d->name = 'PHPUnit_Tenant-Post';
        $d->slug = 'PHPUnit_Tenant-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyTenant(object $tenant ) :void
    {
        $o = new Models\Tenancy\Tenants();
        $test = $o->deleteDetail( id: $tenant->id );
    }



/* LOCATION
---------------------------------------------------------------------------- */

    public static function createLocation( 
        object $site
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\Locations();
        $d = new Data\DCIM\Locations();
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
        $o = new Models\DCIM\Locations();
        $o->deleteDetail( id: $location->id );
    }



/* RACK
---------------------------------------------------------------------------- */

    public static function createRack( 
        object $site,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\Racks();
        $d = new Data\DCIM\Racks();
        $d->name = 'PHPUnit_Rack-' . $rand;
        $d->site = $site->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRack(object $rack ) : void
    {
        $o = new Models\DCIM\Racks();
        $o->deleteDetail( id: $rack->id );
    }


/* RIR
---------------------------------------------------------------------------- */

    public static function createRir() : object
    {
        $o = new Models\IPAM\Rirs();
        $d = new Data\IPAM\Rirs();
        $d->name = 'PHPUnit_Rirs-Post';
        $d->slug = 'PHPUnit_Rirs-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRir(object $rir ) : void
    {
        $o = new Models\IPAM\Rirs();
        $o->deleteDetail( id: $rir->id );
    }



/* VIRTUAL CHASSIS
---------------------------------------------------------------------------- */

    public static function createVirtualChassis() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\VirtualChassis();
        $d = new Data\DCIM\VirtualChassis();
        $d->name = 'PHPUnit_VChas-' . $rand;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVirtualChassis(object $chassis ) : void
    {
        $o = new Models\DCIM\VirtualChassis();
        $o->deleteDetail( id: $chassis->id );
    }



/* MOBILE BAY
---------------------------------------------------------------------------- */

    public static function createModuleBay( object $device ) : object
    {
        $o = new Models\DCIM\ModuleBays();
        $d = new Data\DCIM\ModuleBays();
        $d->name = 'PHPUnit_ModBay-Post';
        $d->device = $device->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyModuleBay(object $bay ) : void
    {
        $o = new Models\DCIM\ModuleBays();
        $o->deleteDetail( id: $bay->id );
    }



/* MOBILE TYPE
---------------------------------------------------------------------------- */

    public static function createModuleType( object $manufacturer ) : object
    {
        $o = new Models\DCIM\ModuleTypes();
        $d = new Data\DCIM\ModuleTypes();
        $d->model = 'PHPUnit_ModelTypePut';
        $d->manufacturer = $manufacturer->id;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyModuleType(object $modtype ) : void
    {
        $o = new Models\DCIM\ModuleTypes();
        $o->deleteDetail( id: $modtype->id );
    }


/* POWER PANEL
---------------------------------------------------------------------------- */

    public static function createPowerPanel( object $site ) : object
    {
        $o = new Models\DCIM\PowerPanels();
        $d = new Data\DCIM\PowerPanels();
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
        $o = new Models\DCIM\PowerPanels();
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
        $o = new Models\DCIM\Devices();
        $d = new Data\DCIM\Devices();
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
        $o = new Models\DCIM\Devices();
        $o->deleteDetail( id: $device->id );    
    }



/* INTERFACE
---------------------------------------------------------------------------- */

    public static function createInterface( object $device )
    {
        $rand = rand( 0,100000 );
        $o = new Models\DCIM\Interfaces();
        $d = new Data\DCIM\Interfaces();
        $d->name = 'PHPUnit_Interface-Post-' . $rand;
        $d->device = $device->id;
        $d->type = 'ieee802.11ac';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyInterface(object $interface ) : void
    {
        $o = new Models\DCIM\Interfaces();
        $o->deleteDetail( id: $interface->id );
    }


/* WIRELESS LAN
---------------------------------------------------------------------------- */

    public static function createWirelessLan()
    {
        $rand = rand( 1, 100000 );
        $o = new Models\Wireless\WirelessLans();
        $d = new Data\Wireless\WirelessLans();
        $d->ssid = "PHPUnit_SSID-Post";
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyWirelessLan(object $lan ) : void
    {
        $o = new Models\Wireless\WirelessLans();
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
        $o = new Models\Circuits\CircuitTerminations();
        $d = new Data\Circuits\CircuitTerminations();
        $d->circuit = $circuit->id;
        $d->site = $site->id;
        $d->term_side = $term;

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuitTermination(object $term ) : void
    {
        $o = new Models\Circuits\CircuitTerminations();
        $o->deleteDetail( id: $term->id );
    }



/* REAR PORT
---------------------------------------------------------------------------- */

    public static function createRearPort( object $device ) : object
    {
        $o = new Models\DCIM\RearPorts();
        $d = new Data\DCIM\RearPorts();
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
        $o = new Models\DCIM\RearPorts();
        $o->deleteDetail( id: $port->id );
    }


/* REAR PORT TEMPLATE
---------------------------------------------------------------------------- */

    public static function createRearPortTemplate( object $device_type ) : object
    {
        $o = new Models\DCIM\RearPortTemplates();
        $d = new Data\DCIM\RearPortTemplates();
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
        $o = new Models\DCIM\RearPortTemplates();
        $o->deleteDetail( id: $temp->id );
    }



/* CLUSTER TYPE
---------------------------------------------------------------------------- */

    public static function createClusterType() : object
    {
        $o = new Models\Virtualization\ClusterTypes();
        $d = new Data\Virtualization\ClusterTypes();
        $d->name = 'PHPUnit_ClusterType-Post';
        $d->slug = 'PHPUnit_ClusterType-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyClusterType(object $type ) : void
    {
        $o = new Models\Virtualization\ClusterTypes();
        $o->deleteDetail( id: $type->id );
    }



/* CLUSTER GROUP
---------------------------------------------------------------------------- */

    public static function createClusterGroup() : object
    {
        $o = new Models\Virtualization\ClusterGroups();
        $d = new Data\Virtualization\ClusterGroups();
        $d->name = 'PHPUnit_ClusterGroups-Post';
        $d->slug = 'PHPUnit_ClusterGroups-Post';

        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyClusterGroup(object $group ) : void
    {
        $o = new Models\Virtualization\ClusterGroups();
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
        $o = new Models\Virtualization\Clusters();
        $d = new Data\Virtualization\Clusters();
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
        $o = new Models\Virtualization\Clusters();
        $o->deleteDetail( id: $cluster->id );
    }



/* VIRTUAL MACHINE
---------------------------------------------------------------------------- */

    public static function createVM( object $cluster ) : object
    {
        $o = new Models\Virtualization\VirtualMachines();
        $d = new Data\Virtualization\VirtualMachines();
        $d->name = 'PHPUnit_VirtualMachines-Post';
        $d->cluster = $cluster->id;
        return $o->postDetail( data: $d )->body;

    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVM(object $vm ) : void
    {
        $o = new Models\Virtualization\VirtualMachines();
        $o->deleteDetail( id: $vm->id );
    }



/* FHRP GROUP
---------------------------------------------------------------------------- */

    public static function createFhrpGroup() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Models\IPAM\FhrpGroups();
        $d = new Data\IPAM\FhrpGroups();
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
        $o = new Models\IPAM\FhrpGroups();
        $o->deleteDetail( id: $group->id );
    }


/* IP RANGE
---------------------------------------------------------------------------- */

    public static function createIpRange() : object
    {
        $o = new Models\IPAM\IpRanges();
        $d = new Data\IPAM\IpRanges();
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
        $o = new Models\IPAM\IpRanges();
        $o->deleteDetail( id: $range->id );
    }



/* IP ADDRESS
---------------------------------------------------------------------------- */

    public static function createIpAddress() : object
    {
        $rand = rand( 2, 254 );
        $o = new Models\IPAM\IpAddresses();
        $d = new Data\IPAM\IpAddresses();
        $d->address = "192.168.44.{$rand}/24";
        $d->description = 'PHPUnit_IP-Post-' . $rand;
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyIpAddress(object $ip ) : void
    {
        $o = new Models\IPAM\IpAddresses();
        $o->deleteDetail( id: $ip->id );
    }



/* PREFIX
---------------------------------------------------------------------------- */

    public static function createPrefix() : object
    {
        $o = new Models\IPAM\Prefixes();
        $d = new Data\IPAM\Prefixes();
        $d->prefix = '192.168.1.0/24';
        $d->description = 'PHPUnit_IpRangeAvaIPs-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyPrefix(object $prefix ) : void
    {
        $o = new Models\IPAM\Prefixes();
        $o->deleteDetail( id: $prefix->id );
    }


/* VLAN GROUP
---------------------------------------------------------------------------- */

    public static function createVlanGroup() : object
    {
        $o = new Models\IPAM\VlanGroups();
        $d = new Data\IPAM\VlanGroups();
        $d->name = 'PHPUnit_VlanGroup-Post';
        $d->slug = 'PHPUnit_VlanGroup-Post';
        return $o->postDetail( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVlanGroup(object $group ) : void
    {
        $o = new Models\IPAM\VlanGroups();
        $o->deleteDetail( id: $group->id );
    }
}