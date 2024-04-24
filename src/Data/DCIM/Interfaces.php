<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Interfaces extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * REQUIRED
     * ID of Devices class
     */
    protected int $device;

    /**
     * @var string $vdcs
     * Virtual Device Context
     */
    protected string $vdcs;

    /**
     * @var int $module
     * ID of Modules class
     */
    protected int $module;

    /**
     * @var string $name
     * REQUIRED
     * Name of interface
     */
    protected string $name;

    /**
     * @var string $label
     * Physical label of interface
     */
    protected string $label;

    /**
     * @var string $type
     * REQUIRED
     * Choose from list of types
     */
    protected string $type;

    /**
     * @var bool $enabled
     * Interface is enabled or disabled
     */
    protected bool $enabled;

    /**
     * @var int $parent
     * ID of object class Interface belongs to
     */
    protected int $parent;

    /**
     * @var int $bridge
     * ID of Bridge class
     */
    protected int $bridge;

    /**
     * @var int $lag
     * ID of LAG class
     */
    protected int $lag;

    /**
     * @var int $mtu
     * Maximum Transmit Unit
     */
    protected int $mtu;

    /**
     * @var string $mac_address
     * Physical MAC address
     */
    protected string $mac_address;

    /**
     * @var int $speed
     * Interface speed in Kbps
     */
    protected int $speed;

    /**
     * @var string $duplex
     * ENUM - Full, Half, Auto
     */
    protected string $duplex;
    protected string $wwn;

    /**
     * @var bool $mgmt_only
     * This interface is used only for out-of-band management
     */
    protected bool $mgmt_only;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [ 
            'type'        => ['InterfaceType'],
            'mac_address' => ['MacAddress'],
            'duplex'      => ['Duplex'],
            'mode'        => ['InterfaceMode'],
            'rf_role'     => ['RfRole'],
            'rf_channel'  => ['RfChannel'],
            'poe_mode'    => ['PoeMode'],
            'poe_type'    => ['PoeType'],
            'name'        => [ 'MaxString', 64 ],
            'label'       => [ 'MaxString', 64 ],
            'mtu'         => [ 'RangeInt', 1, 65536 ],
            'speed'       => [ 'RangeInt', 0, 2147483647 ],
            'description' => [ 'MaxString', 200 ]
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
    use Validation\MaxString;
    use Validation\RangeInt;

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