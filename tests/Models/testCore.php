<?php

declare( strict_types = 1 );

namespace Tests\Models;

use Cruzio\lib\Netbox\Models AS Models;
use Cruzio\lib\Netbox\Data AS Data;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;


abstract class testCore extends TestCase
{


/* USER 
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createUser() : object
    {
        $o = new Models\Users\Users();
        $d = new Data\Users\Users();
        $d->set( 'username', 'PHPUnit_Username-Post' );
        $d->set( 'password', 'PHPUnit_Password-Post');
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyUser(object $user ) :void
    {
        $o = new Models\Users\Users();
        $o->delete( id: $user->id );
    }



/* CONTACT 
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createContact() : object
    {
        $o = new Models\Tenancy\Contacts();
        $d = new Data\Tenancy\Contacts();
        $d->set( 'name', 'PHPUnit_Contacts-Post' );
        
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContact(object $contact ) :void
    {
        $o = new Models\Tenancy\Contacts();
        $o->delete( id: $contact->id );
    }



/* CONTACT GROUP
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createContactGroup() : object
    {
        $o = new Models\Tenancy\ContactGroups();
        $d = new Data\Tenancy\ContactGroups();
        $d->set( 'name', 'PHPUnit_ContactGroups-Post' );
        $d->set( 'slug', 'PHPUnit_ContactGroups-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContactGroup(object $group ) :void
    {
        $o = new Models\Tenancy\ContactGroups();
        $o->delete( id: $group->id );
    }



/* CONTACT ROLE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createContactRole() : object
    {
        $o = new Models\Tenancy\ContactRoles();
        $d = new Data\Tenancy\ContactRoles();
        $d->set( 'name', 'PHPUnit_ContactRoles-Post' );
        $d->set( 'slug', 'PHPUnit_ContactRoles-Post' );

        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyContactRole(object $role ) :void
    {
        $o = new Models\Tenancy\ContactRoles();
        $o->delete( id: $role->id );
    }



/* PROVIDER
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createProvider() : object
    {
        $o = new Models\Circuits\Providers();
        $d = new Data\Circuits\Providers();
        $d->set( 'name', 'PHPUnit_Provider-Post' );
        $d->set( 'slug', 'PHPUnit_Provider-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyProvider(object $provider ) :void
    {
        $o = new Models\Circuits\Providers();
        $o->delete( id: $provider->id );
    }


/* CIRCUIT
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createCircuit(
        object $provider,
        object $circuit_type
    ) : object
    {
        $o = new Models\Circuits\Circuits();
        $d = new Data\Circuits\Circuits();
        $d->set( 'cid', 'PHPUnit_Circuit-Post' );
        $d->set( 'provider', $provider->id );
        $d->set( 'type', $circuit_type->id );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuit(object $circuit ) :void
    {
        $o = new Models\Circuits\Circuits();
        $o->delete( id: $circuit->id );
    }


/* CIRCUIT TYPE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createCircuitType() : object
    {
        $o = new Models\Circuits\CircuitTypes();
        $d = new Data\Circuits\CircuitTypes();
        $d->set( 'name', 'PHPUnit_CircuitType-Post' );
        $d->set( 'slug', 'PHPUnit_CircuitType-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuitType(object $ct ) :void
    {
        $o = new Models\Circuits\CircuitTypes();
        $o->delete( id: $ct->id );
    }


/* SITE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createSite() : object
    {
        $rand = rand( 1, 100000 );
        $d = new \Cruzio\lib\Netbox\Data\DCIM\Sites();
        $d->set( 'name', 'PHPUnit_Site-' . $rand );
        $d->set( 'slug', 'PHPUnit_Site-' . $rand );
        $o = new Models\DCIM\Sites();
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroySite(object $site ) :void
    {
        $o = new Models\DCIM\Sites();
        $o->delete( id: $site->id );
    }



/* DEVICE ROLE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createDeviceRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\DeviceRoles();
        $d = new Data\DCIM\DeviceRoles();
        $d->set( 'name', 'PHPUnit_DeviceRole-' . $rand );
        $d->set( 'slug', 'PHPUnit_DeviceRole-' . $rand );

        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDeviceRole(object $devrole ) :void
    {
        $o = new Models\DCIM\DeviceRoles();
        $o->delete( id: $devrole->id );
    }



/* MANUFACTURER
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createManufacturer() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\Manufacturers();
        $d = new Data\DCIM\Manufacturers();
        $d->set( 'name', 'PHPUnit_Manufacturer-' . $rand );
        $d->set( 'slug', 'PHPUnit_Manufacturer-' . $rand );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyManufacturer(object $manf ) :void
    {
        $o = new Models\DCIM\Manufacturers();
        $o->delete( id: $manf->id );
    }



/* DEVICE TYPE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createDeviceType(
        object $manf
    ) : object
    {
        $o = new Models\DCIM\DeviceTypes();
        $d = new Data\DCIM\DeviceTypes();
        $d->set( 'model', 'PHPUnit_DeviceType' );
        $d->set( 'slug', 'PHPUnit_DeviceType' );
        $d->set( 'subdevice_role', 'parent' );
        $d->set( 'manufacturer', $manf->id );

        return (object)$o->post( data: $d )->body;

    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDeviceType(object $devtype ) :void
    {
        $o = new Models\DCIM\DeviceTypes();
        $o->delete( id: $devtype->id );
    }



/* TENANT
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createTenant() : object
    {
        $o = new Models\Tenancy\Tenants();
        $d = new Data\Tenancy\Tenants();
        $d->set( 'name', 'PHPUnit_Tenant-Post' );
        $d->set( 'slug', 'PHPUnit_Tenant-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyTenant(object $tenant ) :void
    {
        $o = new Models\Tenancy\Tenants();
        $test = $o->delete( id: $tenant->id );
    }



/* LOCATION
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createLocation(
        object $site
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\Locations();
        $d = new Data\DCIM\Locations();
        $d->set( 'name', 'PHPUnit_Location-' . $rand );
        $d->set( 'slug', 'PHPUnit_Location-' . $rand );
        $d->set( 'site', $site->id );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyLocation(object $location ) : void
    {
        $o = new Models\DCIM\Locations();
        $o->delete( id: $location->id );
    }



/* RACK
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createRack(
        object $site,
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\Racks();
        $d = new Data\DCIM\Racks();
        $d->set( 'name', 'PHPUnit_Rack-' . $rand );
        $d->set( 'site', $site->id );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRack(object $rack ) : void
    {
        $o = new Models\DCIM\Racks();
        $o->delete( id: $rack->id );
    }


/* RIR
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createRir() : object
    {
        $o = new Models\IPAM\Rirs();
        $d = new Data\IPAM\Rirs();
        $d->set( 'name', 'PHPUnit_Rirs-Post' );
        $d->set( 'slug', 'PHPUnit_Rirs-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRir(object $rir ) : void
    {
        $o = new Models\IPAM\Rirs();
        $o->delete( id: $rir->id );
    }



/* VIRTUAL CHASSIS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createVirtualChassis() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\DCIM\VirtualChassis();
        $d = new Data\DCIM\VirtualChassis();
        $d->set( 'name', 'PHPUnit_VChas-' . $rand );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVirtualChassis(object $chassis ) : void
    {
        $o = new Models\DCIM\VirtualChassis();
        $o->delete( id: $chassis->id );
    }



/* MOBILE BAY
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createModuleBay( object $device ) : object
    {
        $o = new Models\DCIM\ModuleBays();
        $d = new Data\DCIM\ModuleBays();
        $d->set( 'name', 'PHPUnit_ModBay-Post' );
        $d->set( 'device', $device->id );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyModuleBay(object $bay ) : void
    {
        $o = new Models\DCIM\ModuleBays();
        $o->delete( id: $bay->id );
    }



/* MOBILE TYPE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createModuleType( object $manufacturer ) : object
    {
        $o = new Models\DCIM\ModuleTypes();
        $d = new Data\DCIM\ModuleTypes();
        $d->set( 'model', 'PHPUnit_ModelTypePut' );
        $d->set( 'manufacturer', $manufacturer->id );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyModuleType(object $modtype ) : void
    {
        $o = new Models\DCIM\ModuleTypes();
        $o->delete( id: $modtype->id );
    }


/* POWER PANEL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createPowerPanel( object $site ) : object
    {
        $o = new Models\DCIM\PowerPanels();
        $d = new Data\DCIM\PowerPanels();
        $d->set( 'name', 'PHPUnit_PowerPanel' );
        $d->set( 'site', $site->id );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyPowerPanel(object $panel ) : void
    {
        $o = new Models\DCIM\PowerPanels();
        $o->delete( id: $panel->id );
    }



/* DEVICE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createDevice(
        object $site,
        object $devicetype,
        object $devicerole,
    ) : object
    {
        $rand = rand( 0, 100000 );
        $o = new Models\DCIM\Devices();
        $d = new Data\DCIM\Devices();
        $d->set( 'name', 'PHPUnit_Device-' . $rand );
        $d->set( 'device_type', $devicetype->id );
        $d->set( 'site', $site->id );
        $d->set( 'role', $devicerole->id );

        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyDevice(object $device ) :void
    {
        $o = new Models\DCIM\Devices();
        $o->delete( id: $device->id );
    }



/* INTERFACE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createInterface( object $device ) : object
    {
        $rand = rand( 0,100000 );
        $o = new Models\DCIM\Interfaces();
        $d = new Data\DCIM\Interfaces();
        $d->set( 'name', 'PHPUnit_Interface-Post-' . $rand );
        $d->set( 'device', $device->id );
        $d->set( 'type', 'ieee802.11ac' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyInterface(object $interface ) : void
    {
        $o = new Models\DCIM\Interfaces();
        $o->delete( id: $interface->id );
    }


/* WIRELESS LAN
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createWirelessLan() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Models\Wireless\WirelessLans();
        $d = new Data\Wireless\WirelessLans();
        $d->set( 'ssid', "PHPUnit_SSID-Post" );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyWirelessLan(object $lan ) : void
    {
        $o = new Models\Wireless\WirelessLans();
        $o->delete( id: $lan->id );
    }

    

/* CIRCUIT TERMINATION
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createCircuitTermination(
        object $circuit, 
        object $site,
        string $term = 'A'
    ) : object
    {
        $o = new Models\Circuits\CircuitTerminations();
        $d = new Data\Circuits\CircuitTerminations();
        $d->set( 'circuit', $circuit->id );
        $d->set( 'site', $site->id );
        $d->set( 'term_side', $term );

        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCircuitTermination(object $term ) : void
    {
        $o = new Models\Circuits\CircuitTerminations();
        $o->delete( id: $term->id );
    }



/* REAR PORT
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createRearPort( object $device ) : object
    {
        $o = new Models\DCIM\RearPorts();
        $d = new Data\DCIM\RearPorts();
        $d->set( 'name', 'PHPUnit_RearPort-Post' );
        $d->set( 'type', '8p8c' );
        $d->set( 'device', $device->id );
        return (object)$o->post( data: $d )->body;
    }


    /**
     * @throws GuzzleException
     */
    public static function destroyRearPorts(object $port ) : void
    {
        $o = new Models\DCIM\RearPorts();
        $o->delete( id: $port->id );
    }


/* REAR PORT TEMPLATE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createRearPortTemplate( object $device_type ) : object
    {
        $o = new Models\DCIM\RearPortTemplates();
        $d = new Data\DCIM\RearPortTemplates();
        $d->set( 'name', 'PHPUnit_RearPortTempl-Post' );
        $d->set( 'type', '8p8c' );
        $d->set( 'device_type', $device_type->id );
        
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyRearPortsTemplate(object $temp ) : void
    {
        $o = new Models\DCIM\RearPortTemplates();
        $o->delete( id: $temp->id );
    }



/* CLUSTER TYPE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createClusterType() : object
    {
        $o = new Models\Virtualization\ClusterTypes();
        $d = new Data\Virtualization\ClusterTypes();
        $d->set( 'name', 'PHPUnit_ClusterType-Post' );
        $d->set( 'slug', 'PHPUnit_ClusterType-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyClusterType(object $type ) : void
    {
        $o = new Models\Virtualization\ClusterTypes();
        $o->delete( id: $type->id );
    }



/* CLUSTER GROUP
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createClusterGroup() : object
    {
        $o = new Models\Virtualization\ClusterGroups();
        $d = new Data\Virtualization\ClusterGroups();
        $d->set( 'name', 'PHPUnit_ClusterGroups-Post' );
        $d->set( 'slug', 'PHPUnit_ClusterGroups-Post' );

        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyClusterGroup(object $group ) : void
    {
        $o = new Models\Virtualization\ClusterGroups();
        $o->delete( id: $group->id );
    }



/* CLUSTER
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createCluster(
        object $type,
        object $group,
        object $site
    ) : object
    {
        $o = new Models\Virtualization\Clusters();
        $d = new Data\Virtualization\Clusters();
        $d->set( 'name', 'PHPUnit_Clusters-Post' );
        $d->set( 'type', $type->id );
        $d->set( 'group', $group->id );
        $d->set( 'site', $site->id );
        
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyCluster(object $cluster ) : void
    {
        $o = new Models\Virtualization\Clusters();
        $o->delete( id: $cluster->id );
    }



/* VIRTUAL MACHINE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createVM( object $cluster ) : object
    {
        $o = new Models\Virtualization\VirtualMachines();
        $d = new Data\Virtualization\VirtualMachines();
        $d->set( 'name', 'PHPUnit_VirtualMachines-Post' );
        $d->set( 'cluster', $cluster->id );
        return (object)$o->post( data: $d )->body;

    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVM(object $vm ) : void
    {
        $o = new Models\Virtualization\VirtualMachines();
        $o->delete( id: $vm->id );
    }



/* FHRP GROUP
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createFhrpGroup() : object
    {
        $rand = rand( 1, 10000 );
        $o = new Models\IPAM\FhrpGroups();
        $d = new Data\IPAM\FhrpGroups();
        $d->set( 'protocol', 'vrrp2' );
        $d->set( 'group_id', $rand );
        $d->set( 'description', 'PHPUnit_FhrpGroupPost-' . $rand );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyFhrpGroup(object $group ) : void
    {
        $o = new Models\IPAM\FhrpGroups();
        $o->delete( id: $group->id );
    }


/* IP RANGE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createIpRange() : object
    {
        $o = new Models\IPAM\IpRanges();
        $d = new Data\IPAM\IpRanges();
        $d->set('start_address', '192.168.77.0/24' );
        $d->set('end_address', '192.168.77.254/24' );
        $d->set('description', 'PHPUnit_IpRange-Post' );
        return (object)$o->post( data: $d)->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyIpRange(object $range ) : void
    {
        $o = new Models\IPAM\IpRanges();
        $o->delete( id: $range->id );
    }



/* IP ADDRESS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createIpAddress() : object
    {
        $rand = rand( 2, 254 );
        $o = new Models\IPAM\IpAddresses();
        $d = new Data\IPAM\IpAddresses();
        $d->set( 'address', "192.168.44.{$rand}/24" );
        $d->set( 'description', 'PHPUnit_IP-Post-' . $rand );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyIpAddress(object $ip ) : void
    {
        $o = new Models\IPAM\IpAddresses();
        $o->delete( id: $ip->id );
    }



/* PREFIX
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createPrefix() : object
    {
        $o = new Models\IPAM\Prefixes();
        $d = new Data\IPAM\Prefixes();
        $d->set( 'prefix', '192.168.1.0/24' );
        $d->set( 'description', 'PHPUnit_IpRangeAvaIPs-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyPrefix(object $prefix ) : void
    {
        $o = new Models\IPAM\Prefixes();
        $o->delete( id: $prefix->id );
    }


/* VLAN GROUP
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function createVlanGroup() : object
    {
        $o = new Models\IPAM\VlanGroups();
        $d = new Data\IPAM\VlanGroups();
        $d->set( 'name', 'PHPUnit_VlanGroup-Post' );
        $d->set( 'slug', 'PHPUnit_VlanGroup-Post' );
        return (object)$o->post( data: $d )->body;
    }

    /**
     * @throws GuzzleException
     */
    public static function destroyVlanGroup(object $group ) : void
    {
        $o = new Models\IPAM\VlanGroups();
        $o->delete( id: $group->id );
    }
}