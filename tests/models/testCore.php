<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models;

use Cruzio\Netbox\Options\DCIM\DeviceTypes AS DevtOptions;
use Cruzio\Netbox\Options\DCIM\Interfaces AS IntOptions;
use Cruzio\Netbox\Options\Circuits\CircuitTerminations AS CTOptions;

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
        return $o->postDetail(
            username: 'PHPUnit_Username',
            password: 'PHPUnit_Password'
        )['body'];
    }

    public static function destroyUser( object $user ) :void
    {
        $o = new Users\Users();
        $o->deleteDetail( id: $user->id );
    }



/* CONTACT 
---------------------------------------------------------------------------- */

    public static function createContact( object $group ) : object
    {
        $o = new Tenancy\Contacts();
        return $o->postDetail(
              name: 'PHPUnit_Contact',
             group: $group->id
        )['body'];
    }

    public static function destroyContact( object $contact ) :void
    {
        $o = new Tenancy\Contacts();
        $o->deleteDetail( id: $contact->id );
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



/* CONTACT ROLE
---------------------------------------------------------------------------- */

    public static function createContactRole() : object
    {
        $o = new Tenancy\ContactRoles();
        return $o->postDetail(
              name: 'PHPUnit_ContactRole',
              slug: 'PHPUnit_ContactRole',
        )['body'];
    }

    public static function destroyContactRole( object $role ) :void
    {
        $o = new Tenancy\ContactRoles();
        $o->deleteDetail( id: $role->id );
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
        $rand = rand( 1, 100000 );
        $o = new DCIM\Sites();
        return $o->postDetail(
            name: 'PHPUnit_Site-' . $rand,
            slug: 'PHPUnit_Site-' . $rand
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
        $rand = rand( 1, 100000 );
        $o = new DCIM\Manufacturers();
        return $o->postDetail(
            name: 'PHPUnit_Manufacturer-' . $rand,
            slug: 'PHPUnit_Manufacturer-' . $rand
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
        $obj = new DevtOptions();
        $obj->subdevice_role = 'parent';

        $o = new DCIM\DeviceTypes();
        return $o->postDetail(
            manufacturer: $manf->id,
                   model: 'PHPUnit_DeviceType',
                    slug: 'PHPUnit_DeviceType',
                 options: $obj
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
        return $o->postDetail(
            name: 'PHPUnit_Location' . $rand,
            slug: 'PHPUnit_Location' . $rand,
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
        $rand = rand( 1, 100000 );
        $o = new DCIM\Racks();
        return $o->postDetail(
            name: 'PHPUnit_Rack-' . $rand,
            site: $site->id,
            location: $location->id
        )['body'];
    }

    public static function destroyRack( object $rack ) : void
    {
        $o = new DCIM\Racks();
        $o->deleteDetail( id: $rack->id );
    }


/* RIR
---------------------------------------------------------------------------- */

    public static function createRir() : object
    {
        $o = new IPAM\Rirs();
        return $o->postDetail(
            name: 'phptestunit_rir',
            slug: 'phptestunit_rir'
        )['body'];
    }

    public static function destroyRir( object $rir ) : void
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
        return $o->postDetail( name: 'PHPUnit_VChas-' . $rand )['body'];
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
        $rand1 = rand( 0, 100000 );
        $rand2 = rand( 0, 100 );
        $o = new DCIM\Devices();
        return $o->postDetail(
                       name: 'PHPUnit_device-' . $rand1,
                       face: 'front',
                vc_position: $rand2,
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



/* INTERFACE
---------------------------------------------------------------------------- */

    public static function createInterface( object $device )
    {
        $rand = rand( 0,100000 );
        $o = new DCIM\Interfaces();
        $obj = new IntOptions();
        $obj->rf_role = 'station';

        return $o->postDetail(
              name: 'PHPUnit_Interface-' . $rand,
              type: 'ieee802.11ac',
            device: $device->id,
            options: $obj
        )['body'];
    }

    public static function destroyInterface( object $interface )
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
        return $o->postDetail(
            ssid: 'PHPUnit_SSID-' . $rand
        )['body'];
    }

    public static function destroyWirelessLan( object $lan )
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
        $obj = new CTOptions();
        $obj->site = $site->id;
        $o = new Circuits\CircuitTerminations();
        return $o->postDetail(
            circuit: $circuit->id,
            term_side: $term,
            options: $obj
        )['body'];
    }

    public static function destroyCircuitTermination( object $term )
    {
        $o = new Circuits\CircuitTerminations();
        $o->deleteDetail( id: $term->id );
    }



/* REAR PORT
---------------------------------------------------------------------------- */

    public static function createRearPort( object $device ) : object
    {
        $o = new DCIM\RearPorts();
        return $o->postDetail(
            name: 'PHPUnit_RearPort',
            type: '8p8c',
            device: $device->id
        )['body'];
    }

    public static function destroyRearPorts( object $port )
    {
        $o = new DCIM\RearPorts();
        $o->deleteDetail( id: $port->id );
    }


/* REAR PORT TEMPLATE
---------------------------------------------------------------------------- */

    public static function createRearPortTemplate( object $device_type ) : object
    {
        $o = new DCIM\RearPortTemplates();
        return $o->postDetail(
            device_type: $device_type->id,
            name: 'PHPUnit_RearPortTempl',
            type: '8p8c',
        )['body'];
    }

    public static function destroyRearPortsTemplate( object $templ ) : void
    {
        $o = new DCIM\RearPortTemplates();
        $o->deleteDetail( id: $templ->id );
    }



/* CLUSTER TYPE
---------------------------------------------------------------------------- */

    public static function createClusterType() : object
    {
        $o = new Virtualization\ClusterTypes();
        return $o->postDetail(
            name: 'PHPUnit_ClusterType',
            slug: 'PHPUnit_ClusterType'
        )['body'];
    }

    public static function destroyClusterType( object $type ) : void
    {
        $o = new Virtualization\ClusterTypes();
        $o->deleteDetail( id: $type->id );
    }



/* CLUSTER GROUP
---------------------------------------------------------------------------- */

    public static function createClusterGroup() : object
    {
        $o = new Virtualization\ClusterGroups();
        return $o->postDetail(
            name: 'PHPUnit_ClusterGroup',
            slug: 'PHPUnit_ClusterGroup'
        )['body'];
    }

    public static function destroyClusterGroup( object $group )
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
        return $o->postDetail(
             name: 'PHPUnit_Cluster',
             type: $type->id,
            group: $group->id,
             site: $site->id
        )['body'];
    }

    public static function destroyCluster( object $cluster )
    {
        $o = new Virtualization\Clusters();
        $o->deleteDetail( id: $cluster->id );
    }



/* VIRTUAL MACHINE
---------------------------------------------------------------------------- */

    public static function createVM( object $cluster ) : object
    {
        $o = new Virtualization\VirtualMachines();
        return $o->postDetail(
               name: 'PHPUnit_VM',
            cluster: $cluster->id
        )['body'];
    }

    public static function destroyVM( object $vm ) : void
    {
        $o = new Virtualization\VirtualMachines();
        $o->deleteDetail( id: $vm->id );
    }



/* FHRP GROUP
---------------------------------------------------------------------------- */

    public static function createFhrpGroup() : object
    {
        $o = new IPAM\FhrpGroups();
        return $o->postDetail(
            protocol: 'vrrp2',
            group_id: 1
        )['body'];
    }

    public static function destroyFhrpGroup( object $group ) : void
    {
        $o = new IPAM\FhrpGroups();
        $o->deleteDetail( id: $group->id );
    }


/* IP RANGE
---------------------------------------------------------------------------- */

    public static function createIpRange() : object
    {
        $o = new IPAM\IpRanges();
        return $o->postDetail(
            start_address: '192.168.55.1',
              end_address: '192.168.55.254'
        )['body'];
    }

    public static function destroyIpRange( object $range ) : void
    {
        $o = new IPAM\IpRanges();
        $o->deleteDetail( id: $range->id );
    }



/* IP ADDRESS
---------------------------------------------------------------------------- */

    public static function createIpAddress() : object
    {
        $o = new IPAM\IpAddresses();
        return $o->postDetail( address: '192.168.55.55/24')['body'];
    }

    public static function destroyIpAddress( object $ip ) : void
    {
        $o = new IPAM\IpAddresses();
        $o->deleteDetail( id: $ip->id );
    }



/* PREFIX
---------------------------------------------------------------------------- */

    public static function createPrefix() : object
    {
        $o = new IPAM\Prefixes();
        return $o->postDetail( prefix: '192.168.55.0/25' )['body'];
    }

    public static function destroyPrefix( object $prefix ) : void
    {
        $o = new IPAM\Prefixes();
        $o->deleteDetail( id: $prefix->id );
    }


/* VLAN GROUP
---------------------------------------------------------------------------- */

    public static function createVlanGroup() : object
    {
        $o = new IPAM\VlanGroups();
        return $o->postDetail(
            name: 'PHPUnit_VlanGroup',
            slug: 'PHPUnit_VlanGroup'
        )['body'];
    }

    public static function destroyVlanGroup( object $group ) : void
    {
        $o = new IPAM\VlanGroups();
        $o->deleteDetail( id: $group->id );
    }

}
