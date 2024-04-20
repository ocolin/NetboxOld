<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Interfaces extends Data_Core implements DataInterface
{
    protected int    $device; // Class: Devices
    protected string $vdcs;
    protected int    $module; // Class: Modules
    protected string $name;
    protected string $label;
    protected string $type;
    protected bool   $enabled;
    protected int    $parent;
    protected int    $bridge;
    protected int    $lag;
    protected int    $mtu; // Max: 65536
    protected string $mac_address;
    protected int    $speed;
    protected string $duplex;
    protected string $wwn;
    protected bool   $mgmt_only;
    protected string $description; // Max: 200
    protected string $mode;
    protected string $rf_role;
    protected string $rf_channel;
    protected string $poe_mode;
    protected string $poe_type;
    protected float  $rf_channel_frequency; // Channel frequency (MHz)
    protected float  $rf_channel_width; // Channel width (MHz)
    protected int    $tx_power; // Transmit power (dBm)
    protected int    $untagged_vlan;
    protected string $tagged_vlans;
    protected bool   $mark_connected; // Treat as if a cable is connected
    protected string $wireless_lans;
    protected int    $vrf; 
    
    protected object $custom_fields;

    /**
     * @var array<TagType> $tags
     */
    
    protected array $tags;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected object $cable;
    protected string $cable_end;
    protected object $wireless_link;
    protected string $link_peers;
    protected string $link_peers_type;
    protected object $l2vpn_termination;
    protected string $connected_endpoints;
    protected string $connected_endpoints_type;
    protected string $connected_endpoints_reachable;
    protected string $created;
    protected string $last_updated;
    protected int    $count_ipaddresses;
    protected int    $count_fhrp_groups;
    protected string $_occupied;

    

/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'device', 'name', 'type' ];
    }


/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function readonly() : array
    {
        return [
            'id',
            'url',
            'display',
            'cable',
            'cable_end',
            'wireless_link',
            'link_peers',
            'link_peers_type',
            'l2vpn_termination',
            'connected_endpoints',
            'connected_endpoints_type',
            'connected_endpoints_reachable',
            'created',
            'last_updated',
            'count_ipaddresses',
            'count_fhrp_groups',
            '_occupied'
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 
            'type'        => 'InterfaceType', 
            'mac_address' => 'MacAddress',
            'duplex'      => 'Duplex',
            'mode'        => 'InterfaceMode',
            'rf_role'     => 'RfRole',
            'rf_channel'  => 'RfChannel',
            'poe_mode'    => 'PoeMode',
            'poe_type'    => 'PoeType'
        ];
    }

    use Validation\InterfaceType;
    use Validation\MacAddress;
    use Validation\Duplex;
    use Validation\InterfaceMode;
    use Validation\RfRole;
    use Validation\RfChannel;
    use Validation\PoeMode;
    use Validation\PoeType;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device": 0,
  "vdcs": [
    0
  ],
  "module": 0,
  "name": "string",
  "label": "string",
  "type": "virtual",
  "enabled": true,
  "parent": 0,
  "bridge": 0,
  "lag": 0,
  "mtu": 65536,
  "mac_address": "string",
  "speed": 2147483647,
  "duplex": "half",
  "wwn": "string",
  "mgmt_only": true,
  "description": "string",
  "mode": "access",
  "rf_role": "ap",
  "rf_channel": "2.4g-1-2412-22",
  "poe_mode": "pd",
  "poe_type": "type1-ieee802.3af",
  "rf_channel_frequency": 99999,
  "rf_channel_width": 9999,
  "tx_power": 127,
  "untagged_vlan": 0,
  "tagged_vlans": [
    0
  ],
  "mark_connected": true,
  "wireless_lans": [
    0
  ],
  "vrf": 0,
  "tags": [
    {
      "name": "string",
      "slug": "I_f-AJxS0_",
      "color": "3f091d"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */