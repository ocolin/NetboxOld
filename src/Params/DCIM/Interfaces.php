<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Interfaces extends Params_Core implements ParamsInterface
{
    /**
     * @var array<int> $bridge_id
     */
    protected array $bridge_id;

    /**
     * @var array<int> $bridge_id__n
     */
    protected array $bridge_id__n;
    protected string $cable_end;
    protected string $cable_end__n;
    protected bool $cabled;
    protected bool $connected;

    /**
     * @var array<int> $created
     */
    protected array $created;

    /**
     * @var array<string> $created__empty
     */
    protected array $created__empty;

    /**
     * @var array<string> $created__gt
     */
    protected array $created__gt;

    /**
     * @var array<string> $created__gte
     */
    protected array $created__gte;

    /**
     * @var array<string> $created__lt
     */
    protected array $created__lt;

    /**
     * @var array<string> $created__lte
     */
    protected array $created__lte;

    /**
     * @var array<string> $created__n
     */
    protected array $created__n;
    protected string $created_by_request;

    /**
     * @var array<string> $description
     */
    protected array $description;
    protected bool $description__empty;

    /**
     * @var array<string> $description__ic
     */
    protected array $description__ic;

    /**
     * @var array<string> $description__ie
     */
    protected array $description__ie;

    /**
     * @var array<string> $description__iew
     */
    protected array $description__iew;

    /**
     * @var array<string> $description__isw
     */
    protected array $description__isw;

    /**
     * @var array<string> $description__n
     */
    protected array $description__n;

    /**
     * @var array<string> $description__nic
     */
    protected array $description__nic;

    /**
     * @var array<string> $description__nie
     */
    protected array $description__nie;

    /**
     * @var array<string> $description__niew
     */
    protected array $description__niew;

    /**
     * @var array<string> $description__nisw
     */
    protected array $description__nisw;

    /**
     * @var array<string> $device_type
     */
    protected array $device_type;

    /**
     * @var array<string> $device_type__n
     */
    protected array $device_type__n;

    /**
     * @var array<int> $device_type_id
     */
    protected array $device_type_id;

    /**
     * @var array<int> $device_type_id__n
     */
    protected array $device_type_id__n;

    /**
     * @var array<string> $duplex
     */
    protected array $duplex;

    /**
     * @var array<string> $duplex__n
     */
    protected array $duplex__n;
    protected bool $enabled;

    /**
     * @var array<int> $id
     */
    protected array $id;
    protected bool $id__empty;

    /**
     * @var array<int> $id__gt
     */
    protected array $id__gt;

    /**
     * @var array<int> $id__gte
     */
    protected array $id__gte;

    /**
     * @var array<int> $id__lt
     */
    protected array $id__lt;

    /**
     * @var array<int> $id__lte
     */
    protected array $id__lte;

    /**
     * @var array<int> $id__n
     */
    protected array $id__n;

    /**
     * @var array<int> $l2vpn
     */
    protected array $l2vpn;

    /**
     * @var array<int> $l2vpn__n
     */
    protected array $l2vpn__n;

    /**
     * @var array<int> $l2vpn_id
     */
    protected array $l2vpn_id;

    /**
     * @var array<int> $l2vpn_id__n
     */
    protected array $l2vpn_id__n;

    /**
     * @var array<string>  $label
     */
    protected array $label;

    protected bool $label__empty;

    /**
     * @var array<string> $label__ic
     */
    protected array $label__ic;

    /**
     * @var array<string> $label__ie
     */
    protected array $label__ie;

    /**
     * @var array<string> $label__iew
     */
    protected array $label__iew;

    /**
     * @var array<string> $label__isw
     */
    protected array $label__isw;

    /**
     * @var array<string> $label__n
     */
    protected array $label__n;

    /**
     * @var array<string> $label__nic
     */
    protected array $label__nic;

    /**
     * @var array<string> $label__nie
     */
    protected array $label__nie;

    /**
     * @var array<string> $label__niew
     */
    protected array $label__niew;

    /**
     * @var array<string> $label__nisw
     */
    protected array $label__nisw;

    /**
     * @var array<int> $lag_id
     */
    protected array $lag_id;

    /**
     * @var array<int> $lag_id__n
     */
    protected array $lag_id__n;

    /**
     * @var array<string> $last_updated
     */
    protected array $last_updated;

    /**
     * @var array<string> $last_updated__empty
     */
    protected array $last_updated__empty;

    /**
     * @var array<string> $last_updated__gt
     */
    protected array $last_updated__gt;

    /**
     * @var array<string> $last_updated__gte
     */
    protected array $last_updated__gte;

    /**
     * @var array<string> $last_updated__lt
     */
    protected array $last_updated__lt;

    /**
     * @var array<string> $last_updated__lte
     */
    protected array $last_updated__lte;

    /**
     * @var array<string> $last_updated__n
     */
    protected array $last_updated__n;
    protected int $limit;

    /**
     * @var array<string> $location
     */
    protected array $location;

    /**
     * @var array<string> $location__n
     */
    protected array $location__n;

    /**
     * @var array<string> $location_id
     */
    protected array $location_id;

    /**
     * @var array<string> $location_id__n
     */
    protected array $location_id__n;

    /**
     * @var array<string> $mac_address
     */
    protected array $mac_address;

    /**
     * @var array<string> $mac_address__ic
     */
    protected array $mac_address__ic;

    /**
     * @var array<string> $mac_address__ie
     */
    protected array $mac_address__ie;

    /**
     * @var array<string> $mac_address__iew
     */
    protected array $mac_address__iew;

    /**
     * @var array<string> $mac_address__isw
     */
    protected array $mac_address__isw;

    /**
     * @var array<string> $mac_address__n
     */
    protected array $mac_address__n;

    /**
     * @var array<string> $mac_address__nic
     */
    protected array $mac_address__nic;

    /**
     * @var array<string> $mac_address__nie
     */
    protected array $mac_address__nie;

    /**
     * @var array<string> $mac_address__niew
     */
    protected array $mac_address__niew;

    /**
     * @var array<string> $mac_address__nisw
     */
    protected array $mac_address__nisw;
    protected bool $mgmt_only;
    protected string $mode;
    protected string $mode__n;
    protected string $modified_by_request;

    /**
     * @var array<int> $module_id
     */
    protected array $module_id;

    /**
     * @var array<int> $module_id__n
     */
    protected array $module_id__n;

    /**
     * @var array<int> $mtu
     */
    protected array $mtu;

    protected bool $mtu__empty;

    /**
     * @var array<int> $mtu__gt
     */
    protected array $mtu__gt;

    /**
     * @var array<int> $mtu__gte
     */
    protected array $mtu__gte;

    /**
     * @var array<int> $mtu__lt
     */
    protected array $mtu__lt;

    /**
     * @var array<int> $mtu__lte
     */
    protected array $mtu__lte;

    /**
     * @var array<int> $mtu__n
     */
    protected array $mtu__n;

    /**
     * @var array<string> $name
     */
    protected array $name;
    protected bool $name__empty;

    /**
     * @var array<string> $name__ic
     */
    protected array $name__ic;

    /**
     * @var array<string> $name__ie
     */
    protected array $name__ie;

    /**
     * @var array<string> $name__iew
     */
    protected array $name__iew;

    /**
     * @var array<string> $name__isw
     */
    protected array $name__isw;

    /**
     * @var array<string> $name__n
     */
    protected array $name__n;

    /**
     * @var array<string> $name__nic
     */
    protected array $name__nic;

    /**
     * @var array<string> $name__nie
     */
    protected array $name__nie;

    /**
     * @var array<string> $name__niew
     */
    protected array $name__niew;

    /**
     * @var array<string> $name__nisw
     */
    protected array $name__nisw;
    protected bool $occupied;
    protected int $offset;
    protected string $ordering;

    /**
     * @var array<int> $parent_id
     */
    protected array $parent_id;

    /**
     * @var array<int> $parent_id__n
     */
    protected array $parent_id__n;

    /**
     * @var array<string> $poe_mode
     */
    protected array $poe_mode;

    /**
     * @var array<string> $poe_mode__n
     */
    protected array $poe_mode__n;

    /**
     * @var array<string> $poe_type
     */
    protected array $poe_type;

    /**
     * @var array<string> $poe_type__n
     */
    protected array $poe_type__n;

    protected string $q;

    /**
     * @var array<string> $rack
     */
    protected array $rack;

    /**
     * @var array<string> $rack__n
     */
    protected array $rack__n;

    /**
     * @var array<int> $rack_id
     */
    protected array $rack_id;

    /**
     * @var array<int> $rack_id__n
     */
    protected array $rack_id__n;

    /**
     * @var array<int> $region
     */
    protected array $region;

    /**
     * @var array<int> $region__n
     */
    protected array $region__n;

    /**
     * @var array<int> $region_id
     */
    protected array $region_id;

    /**
     * @var array<int> $region_id__n
     */
    protected array $region_id__n;

    /**
     * @var array<string> $rf_channel
     */
    protected array $rf_channel;

    /**
     * @var array<string> $rf_channel__n
     */
    protected array $rf_channel__n;

    /**
     * @var array<int|float> $rf_channel_frequency
     */
    protected array $rf_channel_frequency;

    protected bool $rf_channel_frequency__empty;

    /**
     * @var array<int|float> $rf_channel_frequency__gt
     */
    protected array $rf_channel_frequency__gt;

    /**
     * @var array<int|float> $rf_channel_frequency__gte
     */
    protected array $rf_channel_frequency__gte;

    /**
     * @var array<int|float> $rf_channel_frequency__lt
     */
    protected array $rf_channel_frequency__lt;

    /**
     * @var array<int|float> $rf_channel_frequency__lte
     */
    protected array $rf_channel_frequency__lte;

    /**
     * @var array<int|float> $rf_channel_frequency__n
     */
    protected array $rf_channel_frequency__n;

    /**
     * @var array<int|float> $rf_channel_width
     */
    protected array $rf_channel_width;
    protected bool $rf_channel_width__empty;

    /**
     * @var array<int|float> $rf_channel_width__gt
     */
    protected array $rf_channel_width__gt;

    /**
     * @var array<int|float> $rf_channel_width__gte
     */
    protected array $rf_channel_width__gte;

    /**
     * @var array<int|float> $rf_channel_width__lt
     */
    protected array $rf_channel_width__lt;

    /**
     * @var array<int|float> $rf_channel_width__lte
     */
    protected array $rf_channel_width__lte;

    /**
     * @var array<int|float> $rf_channel_width__n
     */
    protected array $rf_channel_width__n;

    /**
     * @var array<string> $rf_role
     */
    protected array $rf_role;

    /**
     * @var array<string> $rf_role__n
     */
    protected array $rf_role__n;

    /**
     * @var array<string> $role
     */
    protected array $role;

    /**
     * @var array<string> $role__n
     */
    protected array $role__n;

    /**
     * @var array<int> $role_id
     */
    protected array $role_id;

    /**
     * @var array<int> $role_id__n
     */
    protected array $role_id__n;

    /**
     * @var array<string> $site
     */
    protected array $site;

    /**
     * @var array<string> $site__n
     */
    protected array $site__n;

    /**
     * @var array<int> $site_group
     */
    protected array $site_group;

    /**
     * @var array<int> $site_group__n
     */
    protected array $site_group__n;

    /**
     * @var array<int> $site_group_id
     */
    protected array $site_group_id;

    /**
     * @var array<int> $site_group_id__n
     */
    protected array $site_group_id__n;

    /**
     * @var array<int> $site_id
     */
    protected array $site_id;

    /**
     * @var array<int> $site_id__n
     */
    protected array $site_id__n;

    /**
     * @var array<int> $speed
     */
    protected array $speed;

    /**
     * @var array<int> $speed__empty
     */
    protected array $speed__empty;

    /**
     * @var array<int> $speed__gt
     */
    protected array $speed__gt;

    /**
     * @var array<int> $speed__gte
     */
    protected array $speed__gte;

    /**
     * @var array<int> $speed__lt
     */
    protected array $speed__lt;

    /**
     * @var array<int> $speed__lte
     */
    protected array $speed__lte;

    /**
     * @var array<int> $speed__n
     */
    protected array $speed__n;

    /**
     * @var array<string> $tag
     */
    protected array $tag;

    /**
     * @var array<string> $tag__n
     */
    protected array $tag__n;

    /**
     * @var array<string> $tx_power
     */
    protected array $tx_power;

    protected bool $tx_power__empty;

    /**
     * @var array<int> $tx_power__gt
     */
    protected array $tx_power__gt;

    /**
     * @var array<int> $tx_power__gte
     */
    protected array $tx_power__gte;

    /**
     * @var array<int> $tx_power__lt
     */
    protected array $tx_power__lt;

    /**
     * @var array<int> $tx_power__lte
     */
    protected array $tx_power__lte;

    /**
     * @var array<int> $tx_power__n
     */
    protected array $tx_power__n;

    /**
     * @var array<string> $type
     */
    protected array $type;

    /**
     * @var array<string> $type__n
     */
    protected array $type__n;
    protected string $updated_by_request;

    /**
     * @var array<string> $vdc
     */
    protected array $vdc;

    /**
     * @var array<string> $vdc__n
     */
    protected array $vdc__n;

    /**
     * @var array<int> $vdc_id
     */
    protected array $vdc_id;

    /**
     * @var array<int> $vdc_id__n
     */
    protected array $vdc_id__n;

    /**
     * @var array<int> $vdc_identifier
     */
    protected array $vdc_identifier;

    /**
     * @var array<int> $vdc_identifier__n
     */
    protected array $vdc_identifier__n;

    /**
     * @var array<string> $virtual_chassis
     */
    protected array $virtual_chassis;

    /**
     * @var array<string> $virtual_chassis__n
     */
    protected array $virtual_chassis__n;

    /**
     * @var array<int> $virtual_chassis_id
     */
    protected array $virtual_chassis_id;

    /**
     * @var array<int> $virtual_chassis_id__n
     */
    protected array $virtual_chassis_id__n;

    /**
     * @var array<string> $virtual_chassis_member
     */
    protected array $virtual_chassis_member;

    /**
     * @var array<int> $virtual_chassis_member_id
     */
    protected array $virtual_chassis_member_id;
    protected string $vlan;
    protected string $vlan_id;

    /**
     * @var array<string> $vrf
     */
    protected array $vrf;

    /**
     * @var array<string> $vrf__n
     */
    protected array $vrf__n;

    /**
     * @var array<int> $vrf_id
     */
    protected array $vrf_id;

    /**
     * @var array<int> $vrf_id__n
     */
    protected array $vrf_id__n;

    /**
     * @var array<string> $wwn
     */
    protected array $wwn;

    /**
     * @var array<string> $wwn__ic
     */
    protected array $wwn__ic;

    /**
     * @var array<string> $wwn__ie
     */
    protected array $wwn__ie;

    /**
     * @var array<string> $wwn__iew
     */
    protected array $wwn__iew;

    /**
     * @var array<string> $wwn__isw
     */
    protected array $wwn__isw;

    /**
     * @var array<string> $wwn__n
     */
    protected array $wwn__n;

    /**
     * @var array<string> $wwn__nic
     */
    protected array $wwn__nic;

    /**
     * @var array<string> $wwn__nie
     */
    protected array $wwn__nie;

    /**
     * @var array<string> $wwn__niew
     */
    protected array $wwn__niew;

    /**
     * @var array<string> $wwn__nisw
     */
    protected array $wwn__nisw;
}