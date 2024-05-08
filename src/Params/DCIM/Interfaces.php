<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Interfaces extends Params_Core implements ParamsInterface
{
    /**
     * @var int|array<int> $bridge_id
     */
    protected int|array $bridge_id;

    /**
     * @var int|array<int> $bridge_id__n
     */
    protected int|array $bridge_id__n;
    protected string $cable_end;
    protected string $cable_end__n;
    protected bool $cabled;
    protected bool $connected;

    /**
     * @var int|array<int> $created
     */
    protected int|array $created;

    /**
     * @var string|array<string> $created__empty
     */
    protected string|array $created__empty;

    /**
     * @var string|array<string> $created__gt
     */
    protected string|array $created__gt;

    /**
     * @var string|array<string> $created__gte
     */
    protected string|array $created__gte;

    /**
     * @var string|array<string> $created__lt
     */
    protected string|array $created__lt;

    /**
     * @var string|array<string> $created__lte
     */
    protected string|array $created__lte;

    /**
     * @var string|array<string> $created__n
     */
    protected string|array $created__n;
    protected string $created_by_request;

    /**
     * @var string|array<string> $description
     */
    protected string|array $description;
    protected bool $description__empty;

    /**
     * @var string|array<string> $description__ic
     */
    protected string|array $description__ic;

    /**
     * @var string|array<string> $description__ie
     */
    protected string|array $description__ie;

    /**
     * @var string|array<string> $description__iew
     */
    protected string|array $description__iew;

    /**
     * @var string|array<string> $description__isw
     */
    protected string|array $description__isw;

    /**
     * @var string|array<string> $description__n
     */
    protected string|array $description__n;

    /**
     * @var string|array<string> $description__nic
     */
    protected string|array $description__nic;

    /**
     * @var string|array<string> $description__nie
     */
    protected string|array $description__nie;

    /**
     * @var string|array<string> $description__niew
     */
    protected string|array $description__niew;

    /**
     * @var string|array<string> $description__nisw
     */
    protected string|array $description__nisw;

    /**
     * @var string|array<string> $device_type
     */
    protected string|array $device_type;

    /**
     * @var string|array<string> $device_type__n
     */
    protected string|array $device_type__n;

    /**
     * @var int|array<int> $device_type_id
     */
    protected int|array $device_type_id;

    /**
     * @var int|array<int> $device_type_id__n
     */
    protected int|array $device_type_id__n;

    /**
     * @var string|array<string> $duplex
     */
    protected string|array $duplex;

    /**
     * @var string|array<string> $duplex__n
     */
    protected string|array $duplex__n;
    protected bool $enabled;

    /**
     * @var int|array<int> $id
     */
    protected int|array $id;
    protected bool $id__empty;

    /**
     * @var int|array<int> $id__gt
     */
    protected int|array $id__gt;

    /**
     * @var int|array<int> $id__gte
     */
    protected int|array $id__gte;

    /**
     * @var int|array<int> $id__lt
     */
    protected int|array $id__lt;

    /**
     * @var int|array<int> $id__lte
     */
    protected int|array $id__lte;

    /**
     * @var int|array<int> $id__n
     */
    protected int|array $id__n;

    /**
     * @var int|array<int> $l2vpn
     */
    protected int|array $l2vpn;

    /**
     * @var int|array<int> $l2vpn__n
     */
    protected int|array $l2vpn__n;

    /**
     * @var int|array<int> $l2vpn_id
     */
    protected int|array $l2vpn_id;

    /**
     * @var int|array<int> $l2vpn_id__n
     */
    protected int|array $l2vpn_id__n;

    /**
     * @var string|array<string>  $label
     */
    protected string|array $label;

    protected bool $label__empty;

    /**
     * @var string|array<string> $label__ic
     */
    protected string|array $label__ic;

    /**
     * @var string|array<string> $label__ie
     */
    protected string|array $label__ie;

    /**
     * @var string|array<string> $label__iew
     */
    protected string|array $label__iew;

    /**
     * @var string|array<string> $label__isw
     */
    protected string|array $label__isw;

    /**
     * @var string|array<string> $label__n
     */
    protected string|array $label__n;

    /**
     * @var string|array<string> $label__nic
     */
    protected string|array $label__nic;

    /**
     * @var string|array<string> $label__nie
     */
    protected string|array $label__nie;

    /**
     * @var string|array<string> $label__niew
     */
    protected string|array $label__niew;

    /**
     * @var string|array<string> $label__nisw
     */
    protected string|array $label__nisw;

    /**
     * @var int|array<int> $lag_id
     */
    protected int|array $lag_id;

    /**
     * @var int|array<int> $lag_id__n
     */
    protected int|array $lag_id__n;

    /**
     * @var string|array<string> $last_updated
     */
    protected string|array $last_updated;

    /**
     * @var string|array<string> $last_updated__empty
     */
    protected string|array $last_updated__empty;

    /**
     * @var string|array<string> $last_updated__gt
     */
    protected string|array $last_updated__gt;

    /**
     * @var string|array<string> $last_updated__gte
     */
    protected string|array $last_updated__gte;

    /**
     * @var string|array<string> $last_updated__lt
     */
    protected string|array $last_updated__lt;

    /**
     * @var string|array<string> $last_updated__lte
     */
    protected string|array $last_updated__lte;

    /**
     * @var string|array<string> $last_updated__n
     */
    protected string|array $last_updated__n;
    protected int $limit;

    /**
     * @var string|array<string> $location
     */
    protected string|array $location;

    /**
     * @var string|array<string> $location__n
     */
    protected string|array $location__n;

    /**
     * @var string|array<string> $location_id
     */
    protected string|array $location_id;

    /**
     * @var string|array<string> $location_id__n
     */
    protected string|array $location_id__n;

    /**
     * @var string|array<string> $mac_address
     */
    protected string|array $mac_address;

    /**
     * @var string|array<string> $mac_address__ic
     */
    protected string|array $mac_address__ic;

    /**
     * @var string|array<string> $mac_address__ie
     */
    protected string|array $mac_address__ie;

    /**
     * @var string|array<string> $mac_address__iew
     */
    protected string|array $mac_address__iew;

    /**
     * @var string|array<string> $mac_address__isw
     */
    protected string|array $mac_address__isw;

    /**
     * @var string|array<string> $mac_address__n
     */
    protected string|array $mac_address__n;

    /**
     * @var string|array<string> $mac_address__nic
     */
    protected string|array $mac_address__nic;

    /**
     * @var string|array<string> $mac_address__nie
     */
    protected string|array $mac_address__nie;

    /**
     * @var string|array<string> $mac_address__niew
     */
    protected string|array $mac_address__niew;

    /**
     * @var string|array<string> $mac_address__nisw
     */
    protected string|array $mac_address__nisw;
    protected bool $mgmt_only;
    protected string $mode;
    protected string $mode__n;
    protected string $modified_by_request;

    /**
     * @var int|array<int> $module_id
     */
    protected int|array $module_id;

    /**
     * @var int|array<int> $module_id__n
     */
    protected int|array $module_id__n;

    /**
     * @var int|array<int> $mtu
     */
    protected int|array $mtu;

    protected bool $mtu__empty;

    /**
     * @var int|array<int> $mtu__gt
     */
    protected int|array $mtu__gt;

    /**
     * @var int|array<int> $mtu__gte
     */
    protected int|array $mtu__gte;

    /**
     * @var int|array<int> $mtu__lt
     */
    protected int|array $mtu__lt;

    /**
     * @var int|array<int> $mtu__lte
     */
    protected int|array $mtu__lte;

    /**
     * @var int|array<int> $mtu__n
     */
    protected int|array $mtu__n;

    /**
     * @var string|array<string> $name
     */
    protected string|array $name;
    protected bool $name__empty;

    /**
     * @var string|array<string> $name__ic
     */
    protected string|array $name__ic;

    /**
     * @var string|array<string> $name__ie
     */
    protected string|array $name__ie;

    /**
     * @var string|array<string> $name__iew
     */
    protected string|array $name__iew;

    /**
     * @var string|array<string> $name__isw
     */
    protected string|array $name__isw;

    /**
     * @var string|array<string> $name__n
     */
    protected string|array $name__n;

    /**
     * @var string|array<string> $name__nic
     */
    protected string|array $name__nic;

    /**
     * @var string|array<string> $name__nie
     */
    protected string|array $name__nie;

    /**
     * @var string|array<string> $name__niew
     */
    protected string|array $name__niew;

    /**
     * @var string|array<string> $name__nisw
     */
    protected string|array $name__nisw;
    protected bool $occupied;
    protected int $offset;
    protected string $ordering;

    /**
     * @var int|array<int> $parent_id
     */
    protected int|array $parent_id;

    /**
     * @var int|array<int> $parent_id__n
     */
    protected int|array $parent_id__n;

    /**
     * @var string|array<string> $poe_mode
     */
    protected string|array $poe_mode;

    /**
     * @var string|array<string> $poe_mode__n
     */
    protected string|array $poe_mode__n;

    /**
     * @var string|array<string> $poe_type
     */
    protected string|array $poe_type;

    /**
     * @var string|array<string> $poe_type__n
     */
    protected string|array $poe_type__n;

    protected string $q;

    /**
     * @var string|array<string> $rack
     */
    protected string|array $rack;

    /**
     * @var string|array<string> $rack__n
     */
    protected string|array $rack__n;

    /**
     * @var int|array<int> $rack_id
     */
    protected int|array $rack_id;

    /**
     * @var int|array<int> $rack_id__n
     */
    protected int|array $rack_id__n;

    /**
     * @var int|array<int> $region
     */
    protected int|array $region;

    /**
     * @var int|array<int> $region__n
     */
    protected int|array $region__n;

    /**
     * @var int|array<int> $region_id
     */
    protected int|array $region_id;

    /**
     * @var int|array<int> $region_id__n
     */
    protected int|array $region_id__n;

    /**
     * @var string|array<string> $rf_channel
     */
    protected string|array $rf_channel;

    /**
     * @var string|array<string> $rf_channel__n
     */
    protected string|array $rf_channel__n;

    /**
     * @var int|float|array<int|float> $rf_channel_frequency
     */
    protected int|float|array $rf_channel_frequency;

    protected bool $rf_channel_frequency__empty;

    /**
     * @var int|float|array<int|float> $rf_channel_frequency__gt
     */
    protected int|float|array $rf_channel_frequency__gt;

    /**
     * @var int|float|array<int|float> $rf_channel_frequency__gte
     */
    protected int|float|array $rf_channel_frequency__gte;

    /**
     * @var int|float|array<int|float> $rf_channel_frequency__lt
     */
    protected int|float|array $rf_channel_frequency__lt;

    /**
     * @var int|float|array<int|float> $rf_channel_frequency__lte
     */
    protected int|float|array $rf_channel_frequency__lte;

    /**
     * @var int|float|array<int|float> $rf_channel_frequency__n
     */
    protected int|float|array $rf_channel_frequency__n;

    /**
     * @var int|float|array<int|float> $rf_channel_width
     */
    protected int|float|array $rf_channel_width;
    protected bool $rf_channel_width__empty;

    /**
     * @var int|float|array<int|float> $rf_channel_width__gt
     */
    protected int|float|array $rf_channel_width__gt;

    /**
     * @var int|float|array<int|float> $rf_channel_width__gte
     */
    protected int|float|array $rf_channel_width__gte;

    /**
     * @var int|float|array<int|float> $rf_channel_width__lt
     */
    protected int|float|array $rf_channel_width__lt;

    /**
     * @var int|float|array<int|float> $rf_channel_width__lte
     */
    protected int|float|array $rf_channel_width__lte;

    /**
     * @var int|float|array<int|float> $rf_channel_width__n
     */
    protected int|float|array $rf_channel_width__n;

    /**
     * @var string|array<string> $rf_role
     */
    protected string|array $rf_role;

    /**
     * @var string|array<string> $rf_role__n
     */
    protected string|array $rf_role__n;

    /**
     * @var string|array<string> $role
     */
    protected string|array $role;

    /**
     * @var string|array<string> $role__n
     */
    protected string|array $role__n;

    /**
     * @var int|array<int> $role_id
     */
    protected int|array $role_id;

    /**
     * @var int|array<int> $role_id__n
     */
    protected int|array $role_id__n;

    /**
     * @var string|array<string> $site
     */
    protected string|array $site;

    /**
     * @var string|array<string> $site__n
     */
    protected string|array $site__n;

    /**
     * @var int|array<int> $site_group
     */
    protected int|array $site_group;

    /**
     * @var int|array<int> $site_group__n
     */
    protected int|array $site_group__n;

    /**
     * @var int|array<int> $site_group_id
     */
    protected int|array $site_group_id;

    /**
     * @var int|array<int> $site_group_id__n
     */
    protected int|array $site_group_id__n;

    /**
     * @var int|array<int> $site_id
     */
    protected int|array $site_id;

    /**
     * @var int|array<int> $site_id__n
     */
    protected int|array $site_id__n;

    /**
     * @var int|array<int> $speed
     */
    protected int|array $speed;

    /**
     * @var int|array<int> $speed__empty
     */
    protected int|array $speed__empty;

    /**
     * @var int|array<int> $speed__gt
     */
    protected int|array $speed__gt;

    /**
     * @var int|array<int> $speed__gte
     */
    protected int|array $speed__gte;

    /**
     * @var int|array<int> $speed__lt
     */
    protected int|array $speed__lt;

    /**
     * @var int|array<int> $speed__lte
     */
    protected int|array $speed__lte;

    /**
     * @var int|array<int> $speed__n
     */
    protected int|array $speed__n;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;

    /**
     * @var string|array<string> $tx_power
     */
    protected string|array $tx_power;

    protected bool $tx_power__empty;

    /**
     * @var int|array<int> $tx_power__gt
     */
    protected int|array $tx_power__gt;

    /**
     * @var int|array<int> $tx_power__gte
     */
    protected int|array $tx_power__gte;

    /**
     * @var int|array<int> $tx_power__lt
     */
    protected int|array $tx_power__lt;

    /**
     * @var int|array<int> $tx_power__lte
     */
    protected int|array $tx_power__lte;

    /**
     * @var int|array<int> $tx_power__n
     */
    protected int|array $tx_power__n;

    /**
     * @var string|array<string> $type
     */
    protected string|array $type;

    /**
     * @var string|array<string> $type__n
     */
    protected string|array $type__n;
    protected string $updated_by_request;

    /**
     * @var string|array<string> $vdc
     */
    protected string|array $vdc;

    /**
     * @var string|array<string> $vdc__n
     */
    protected string|array $vdc__n;

    /**
     * @var int|array<int> $vdc_id
     */
    protected int|array $vdc_id;

    /**
     * @var int|array<int> $vdc_id__n
     */
    protected int|array $vdc_id__n;

    /**
     * @var int|array<int> $vdc_identifier
     */
    protected int|array $vdc_identifier;

    /**
     * @var int|array<int> $vdc_identifier__n
     */
    protected int|array $vdc_identifier__n;

    /**
     * @var string|array<string> $virtual_chassis
     */
    protected string|array $virtual_chassis;

    /**
     * @var string|array<string> $virtual_chassis__n
     */
    protected string|array $virtual_chassis__n;

    /**
     * @var int|array<int> $virtual_chassis_id
     */
    protected int|array $virtual_chassis_id;

    /**
     * @var int|array<int> $virtual_chassis_id__n
     */
    protected int|array $virtual_chassis_id__n;

    /**
     * @var string|array<string> $virtual_chassis_member
     */
    protected string|array $virtual_chassis_member;

    /**
     * @var int|array<int> $virtual_chassis_member_id
     */
    protected int|array $virtual_chassis_member_id;
    protected string $vlan;
    protected string $vlan_id;

    /**
     * @var string|array<string> $vrf
     */
    protected string|array $vrf;

    /**
     * @var string|array<string> $vrf__n
     */
    protected string|array $vrf__n;

    /**
     * @var int|array<int> $vrf_id
     */
    protected int|array $vrf_id;

    /**
     * @var int|array<int> $vrf_id__n
     */
    protected int|array $vrf_id__n;

    /**
     * @var string|array<string> $wwn
     */
    protected string|array $wwn;

    /**
     * @var string|array<string> $wwn__ic
     */
    protected string|array $wwn__ic;

    /**
     * @var string|array<string> $wwn__ie
     */
    protected string|array $wwn__ie;

    /**
     * @var string|array<string> $wwn__iew
     */
    protected string|array $wwn__iew;

    /**
     * @var string|array<string> $wwn__isw
     */
    protected string|array $wwn__isw;

    /**
     * @var string|array<string> $wwn__n
     */
    protected string|array $wwn__n;

    /**
     * @var string|array<string> $wwn__nic
     */
    protected string|array $wwn__nic;

    /**
     * @var string|array<string> $wwn__nie
     */
    protected string|array $wwn__nie;

    /**
     * @var string|array<string> $wwn__niew
     */
    protected string|array $wwn__niew;

    /**
     * @var string|array<string> $wwn__nisw
     */
    protected string|array $wwn__nisw;
}