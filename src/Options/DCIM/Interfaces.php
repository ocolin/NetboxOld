<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Interfaces
{
    public int    $device;
    public ?int   $module;
    public ?int   $parent;
    public ?int   $bridge;
    public ?int   $lag;
    public int    $mtu;
    public ?int   $speed;
    public ?int   $tx_power;
    public ?int   $untagged_vlan;
    public ?int   $wireless_link;
    public ?int   $vrf;

    public string  $name;
    public string  $label;
    public string  $type;
    public ?string $mac_address;
    public ?string $duplex;
    public ?string $wwn;
    public string  $description;
    public string  $mode;
    public string  $rf_role;
    public string  $rf_channel;
    
    public bool   $enabled;
    public bool   $mgmt_only;
    public bool   $mark_connected;

    public ?float $rf_channel_width;
    public ?float $rf_channel_frequency; 

    /**
     * @var array<string>
     */
    
    public array  $tagged_vlans;

    /**
     * @var array<string>
     */
    
    public array  $wireless_lans;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;

    public object $cable;
}