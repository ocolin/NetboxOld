<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Devices extends Params_Core implements ParamsInterface
{
    protected string $airflow;
    protected string $airflow__n;

    /**
     * @var string|array<string> $asset_tag
     */
    protected string|array $asset_tag;
    protected bool $asset_tag__empty;

    /**
     * @var string|array<string> $asset_tag__ic
     */
    protected string|array $asset_tag__ic;

    /**
     * @var string|array<string> $asset_tag__ie
     */
    protected string|array $asset_tag__ie;

    /**
     * @var string|array<string> $asset_tag__iew
     */
    protected string|array $asset_tag__iew;

    /**
     * @var string|array<string> $asset_tag__isw
     */
    protected string|array $asset_tag__isw;

    /**
     * @var string|array<string> $asset_tag__n
     */
    protected string|array $asset_tag__n;

    /**
     * @var string|array<string> $asset_tag__nic
     */
    protected string|array $asset_tag__nic;

    /**
     * @var string|array<string> $asset_tag__nie
     */
    protected string|array $asset_tag__nie;

    /**
     * @var string|array<string> $asset_tag__niew
     */
    protected string|array $asset_tag__niew;

    /**
     * @var string|array<string> $asset_tag__nisw
     */
    protected string|array $asset_tag__nisw;

    /**
     * @var int|array<int> $cluster_id
     */
    protected int|array $cluster_id;

    /**
     * @var int|array<int> $cluster_id__n
     */
    protected int|array $cluster_id__n;

    /**
     * @var int|array<int> $config_template_id
     */
    protected int|array $config_template_id;

    /**
     * @var int|array<int> $config_template_id__n
     */
    protected int|array $config_template_id__n;
    protected bool $console_ports;
    protected bool $console_server_ports;

    /**
     * @var int|array<int> $contact
     */
    protected int|array $contact;

    /**
     * @var int|array<int> $contact__n
     */
    protected int|array $contact__n;

    /**
     * @var int|array<int> $contact_group
     */
    protected int|array $contact_group;

    /**
     * @var int|array<int> $contact_group__n
     */
    protected int|array $contact_group__n;

    /**
     * @var int|array<int> $contact_role
     */
    protected int|array $contact_role;

    /**
     * @var int|array<int> $contact_role__n
     */
    protected int|array $contact_role__n;

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

    protected bool $device_bays;

    /**
     * @var string|array<string> $device_type
     */
    protected string|array $device_type;

    /**
     * @var string|array<string> $device_type__n
     */
    protected string|array $device_type__n;

    /**
     * @var string|array<string> $device_type_id
     */
    protected string|array $device_type_id;

    /**
     * @var string|array<string> $device_type_id__n
     */
    protected string|array $device_type_id__n;

    protected string $face;
    protected string $face__n;
    protected bool $has_oob_ip;
    protected bool $has_primary_ip;

    /**
     * @var int|array<int> id
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

    protected bool $interfaces;
    protected bool $is_full_depth;

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

    /**
     * @var int|float|array<int|float> $latitude
     */
    protected int|float|array $latitude;
    protected bool $latitude__empty;

    /**
     * @var int|float|array<int|float> $latitude__gt
     */
    protected int|float|array $latitude__gt;

    /**
     * @var int|float|array<int|float> $latitude__gte
     */
    protected int|float|array $latitude__gte;

    /**
     * @var int|float|array<int|float> $latitude__lt
     */
    protected int|float|array $latitude__lt;

    /**
     * @var int|float|array<int|float> $latitude__lte
     */
    protected int|float|array $latitude__lte;

    /**
     * @var int|float|array<int|float> $latitude__n
     */
    protected int|float|array $latitude__n;
    protected int $limit;
    protected bool $local_context_data;


    /**
     * @var int|float|array<int|float> $longitude
     */
    protected int|float|array $longitude;
    protected bool $longitude__empty;

    /**
     * @var int|float|array<int|float> $longitude__gt
     */
    protected int|float|array $longitude__gt;

    /**
     * @var int|float|array<int|float> $longitude__gte
     */
    protected int|float|array $longitude__gte;

    /**
     * @var int|float|array<int|float> $longitude__lt
     */
    protected int|float|array $longitude__lt;

    /**
     * @var int|float|array<int|float> $longitude__lte
     */
    protected int|float|array $longitude__lte;

    /**
     * @var int|float|array<int|float> $longitude__n
     */
    protected int|float|array $longitude__n;

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

    /**
     * @var string|array<string>
     */
    protected string|array $manufacturer;

    /**
     * @var string|array<string> $manufacturer__n
     */
    protected string|array $manufacturer__n;

    /**
     * @var string|array<string> $manufacturer_id
     */
    protected string|array $manufacturer_id;

    /**
     * @var string|array<string> $manufacturer_id__n
     */
    protected string|array $manufacturer_id__n;

    /**
     * @var string|array<string> $model
     */
    protected string|array $model;

    /**
     * @var string|array<string> $model__n
     */
    protected string|array $model__n;
    protected string $modified_by_request;
    protected bool $module_bays;

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
    protected int $offset;

    /**
     * @var int|array<int> $oob_ip_id
     */
    protected int|array $oob_ip_id;

    /**
     * @var int|array<int> $oob_ip_id__n
     */
    protected int|array $oob_ip_id__n;
    protected string $ordering;

    /**
     * @var int|array<int> $parent_device_id
     */
    protected int|array $parent_device_id;

    /**
     * @var int|array<int> $parent_device_id__n
     */
    protected int|array $parent_device_id__n;
    protected bool $pass_through_ports;

    /**
     * @var string|array<string> $platform
     */
    protected string|array $platform;

    /**
     * @var string|array<string> $platform__n
     */
    protected string|array $platform__n;

    /**
     * @var int|array<int> $platform_id
     */
    protected int|array $platform_id;

    /**
     * @var int|array<int> $platform_id__n
     */
    protected int|array $platform_id__n;

    /**
     * @var int|float|array<int|float> $position
     */
    protected int|float|array $position;

    protected bool $position__empty;

    /**
     * @var int|float|array<int|float> $position__gt
     */
    protected int|float|array $position__gt;

    /**
     * @var int|float|array<int|float> $position__gte
     */
    protected int|float|array $position__gte;

    /**
     * @var int|float|array<int|float> $position__lt
     */
    protected int|float|array $position__lt;

    /**
     * @var int|float|array<int|float> $position__lte
     */
    protected int|float|array $position__lte;

    /**
     * @var int|float|array<int|float> $position__n
     */
    protected int|float|array $position__n;
    protected bool $power_outlets;
    protected bool $power_ports;

    /**
     * @var int|array<int> $primary_ip4_id
     */
    protected int|array $primary_ip4_id;

    /**
     * @var int|array<int> $primary_ip4_id__n
     */
    protected int|array $primary_ip4_id__n;

    /**
     * @var int|array<int> $primary_ip6_id
     */
    protected int|array $primary_ip6_id;

    /**
     * @var int|array<int> $primary_ip6_id__n
     */
    protected int|array $primary_ip6_id__n;
    protected string $q;

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
     * @var string|array<string> $device_role
     */
    protected string|array $device_role;

    /**
     * @var string|array<string> $device_role__n
     */
    protected string|array $device_role__n;

    /**
     * @var int|array<int> $device_role_id
     */
    protected int|array $device_role_id;

    /**
     * @var int|array<int> $device_role_id__n
     */
    protected int|array $device_role_id__n;

    /**
     * @var string|array<string>
     */
    protected string|array $serial;

    protected bool $serial__empty;

    /**
     * @var string|array<string> $serial__ic
     */
    protected string|array $serial__ic;

    /**
     * @var string|array<string> $serial__ie
     */
    protected string|array $serial__ie;

    /**
     * @var string|array<string> $serial__iew
     */
    protected string|array $serial__iew;

    /**
     * @var string|array<string> $serial__isw
     */
    protected string|array $serial__isw;

    /**
     * @var string|array<string> $serial__n
     */
    protected string|array $serial__n;

    /**
     * @var string|array<string> $serial__nic
     */
    protected string|array $serial__nic;

    /**
     * @var string|array<string> $serial__nie
     */
    protected string|array $serial__nie;

    /**
     * @var string|array<string> $serial__niew
     */
    protected string|array $serial__niew;

    /**
     * @var string|array<string> $serial__nisw
     */
    protected string|array $serial__nisw;

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
     * @var string|array<string>
     */
    protected string|array $status;

    /**
     * @var string|array<string> $status__n
     */
    protected string|array $status__n;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;

    /**
     * @var string|array<string> $tenant
     */
    protected string|array $tenant;

    /**
     * @var string|array<string> $tenant__n
     */
    protected string|array $tenant__n;

    /**
     * @var int|array<int> $tenant_group
     */
    protected int|array $tenant_group;

    /**
     * @var int|array<int> $tenant_group__n
     */
    protected int|array $tenant_group__n;

    /**
     * @var int|array<int> $tenant_group_id
     */
    protected int|array $tenant_group_id;

    /**
     * @var int|array<int> $tenant_group_id__n
     */
    protected int|array $tenant_group_id__n;

    /**
     * @var int|array<int> $tenant_id
     */
    protected int|array $tenant_id;

    /**
     * @var int|array<int> $tenant_id__n
     */
    protected int|array $tenant_id__n;
    protected string $updated_by_request; // UUID

    /**
     * @var int|array<int> $vc_position
     */
    protected int|array $vc_position;
    protected bool $vc_position__empty;

    /**
     * @var int|array<int> $vc_position__gt
     */
    protected int|array $vc_position__gt;

    /**
     * @var int|array<int> $vc_position__gte
     */
    protected int|array $vc_position__gte;

    /**
     * @var int|array<int> $vc_position__lt
     */
    protected int|array $vc_position__lt;

    /**
     * @var int|array<int> $vc_position__lte
     */
    protected int|array $vc_position__lte;

    /**
     * @var int|array<int> $vc_position__n
     */
    protected int|array $vc_position__n;

    /**
     * @var int|array<int> $vc_priority
     */
    protected int|array $vc_priority;
    protected bool $vc_priority__empty;

    /**
     * @var int|array<int> $vc_priority__gt
     */
    protected int|array $vc_priority__gt;

    /**
     * @var int|array<int> $vc_priority__gte
     */
    protected int|array $vc_priority__gte;

    /**
     * @var int|array<int> $vc_priority__lt
     */
    protected int|array $vc_priority__lt;

    /**
     * @var int|array<int> $vc_priority__lte
     */
    protected int|array $vc_priority__lte;

    /**
     * @var int|array<int> $vc_priority__n
     */
    protected int|array $vc_priority__n;

    /**
     * @var int|array<int> $virtual_chassis_id
     */
    protected int|array $virtual_chassis_id;

    /**
     * @var int|array<int> $virtual_chassis_id__n
     */
    protected int|array $virtual_chassis_id__n;

    /**
     * @var int|array<int> $virtual_chassis_member
     */
    protected int|array $virtual_chassis_member;
}