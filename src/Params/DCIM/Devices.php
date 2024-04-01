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
     * @var array<string> $asset_tag
     */
    protected array $asset_tag;
    protected bool $asset_tag__empty;

    /**
     * @var array<string> $asset_tag__ic
     */
    protected array $asset_tag__ic;

    /**
     * @var array<string> $asset_tag__ie
     */
    protected array $asset_tag__ie;

    /**
     * @var array<string> $asset_tag__iew
     */
    protected array $asset_tag__iew;

    /**
     * @var array<string> $asset_tag__isw
     */
    protected array $asset_tag__isw;

    /**
     * @var array<string> $asset_tag__n
     */
    protected array $asset_tag__n;

    /**
     * @var array<string> $asset_tag__nic
     */
    protected array $asset_tag__nic;

    /**
     * @var array<string> $asset_tag__nie
     */
    protected array $asset_tag__nie;

    /**
     * @var array<string> $asset_tag__niew
     */
    protected array $asset_tag__niew;

    /**
     * @var array<string> $asset_tag__nisw
     */
    protected array $asset_tag__nisw;

    /**
     * @var array<int> $cluster_id
     */
    protected array $cluster_id;

    /**
     * @var array<int> $cluster_id__n
     */
    protected array $cluster_id__n;

    /**
     * @var array<int> $config_template_id
     */
    protected array $config_template_id;

    /**
     * @var array<int> $config_template_id__n
     */
    protected array $config_template_id__n;
    protected bool $console_ports;
    protected bool $console_server_ports;

    /**
     * @var array<int> $contact
     */
    protected array $contact;

    /**
     * @var array<int> $contact__n
     */
    protected array $contact__n;

    /**
     * @var array<int> $contact_group
     */
    protected array $contact_group;

    /**
     * @var array<int> $contact_group__n
     */
    protected array $contact_group__n;

    /**
     * @var array<int> $contact_role
     */
    protected array $contact_role;

    /**
     * @var array<int> $contact_role__n
     */
    protected array $contact_role__n;

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

    protected bool $device_bays;

    /**
     * @var array<string> $device_type
     */
    protected array $device_type;

    /**
     * @var array<string> $device_type__n
     */
    protected array $device_type__n;

    /**
     * @var array<string> $device_type_id
     */
    protected array $device_type_id;

    /**
     * @var array<string> $device_type_id__n
     */
    protected array $device_type_id__n;

    protected string $face;
    protected string $face__n;
    protected bool $has_oob_ip;
    protected bool $has_primary_ip;

    /**
     * @var array<int> id
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

    protected bool $interfaces;
    protected bool $is_full_depth;

    /**
     * @var array<string> $last_updated
     */
    protected array $last_updated;
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

    /**
     * @var array<float|int> $latitude
     */
    protected array $latitude;
    protected bool $latitude__empty;

    /**
     * @var array<float|int> $latitude__gt
     */
    protected array $latitude__gt;

    /**
     * @var array<float|int> $latitude__gte
     */
    protected array $latitude__gte;

    /**
     * @var array<float|int> $latitude__lt
     */
    protected array $latitude__lt;

    /**
     * @var array<float|int> $latitude__lte
     */
    protected array $latitude__lte;

    /**
     * @var array<float|int> $latitude__n
     */
    protected array $latitude__n;
    protected int $limit;
    protected bool $local_context_data;


    /**
     * @var array<float|int> $longitude
     */
    protected array $longitude;
    protected bool $longitude__empty;

    /**
     * @var array<float|int> $longitude__gt
     */
    protected array $longitude__gt;

    /**
     * @var array<float|int> $longitude__gte
     */
    protected array $longitude__gte;

    /**
     * @var array<float|int> $longitude__lt
     */
    protected array $longitude__lt;

    /**
     * @var array<float|int> $longitude__lte
     */
    protected array $longitude__lte;

    /**
     * @var array<float|int> $longitude__n
     */
    protected array $longitude__n;

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

    /**
     * @var array<string>
     */
    protected array $manufacturer;

    /**
     * @var array<string> $manufacturer__n
     */
    protected array $manufacturer__n;

    /**
     * @var array<string> $manufacturer_id
     */
    protected array $manufacturer_id;

    /**
     * @var array<string> $manufacturer_id__n
     */
    protected array $manufacturer_id__n;

    /**
     * @var array<string> $model
     */
    protected array $model;

    /**
     * @var array<string> $model__n
     */
    protected array $model__n;
    protected string $modified_by_request;
    protected bool $module_bays;

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
    protected int $offset;

    /**
     * @var array<int> $oob_ip_id
     */
    protected array $oob_ip_id;

    /**
     * @var array<int> $oob_ip_id__n
     */
    protected array $oob_ip_id__n;
    protected string $ordering;

    /**
     * @var array<int> $parent_device_id
     */
    protected array $parent_device_id;

    /**
     * @var array<int> $parent_device_id__n
     */
    protected array $parent_device_id__n;
    protected bool $pass_through_ports;

    /**
     * @var array<string> $platform
     */
    protected array $platform;

    /**
     * @var array<string> $platform__n
     */
    protected array $platform__n;

    /**
     * @var array<int> $platform_id
     */
    protected array $platform_id;

    /**
     * @var array<int> $platform_id__n
     */
    protected array $platform_id__n;

    /**
     * @var array<int|float> $position
     */
    protected array $position;

    protected bool $position__empty;

    /**
     * @var array<int|float> $position__gt
     */
    protected array $position__gt;

    /**
     * @var array<int|float> $position__gte
     */
    protected array $position__gte;

    /**
     * @var array<int|float> $position__lt
     */
    protected array $position__lt;

    /**
     * @var array<int|float> $position__lte
     */
    protected array $position__lte;

    /**
     * @var array<int|float> $position__n
     */
    protected array $position__n;
    protected bool $power_outlets;
    protected bool $power_ports;

    /**
     * @var array<int> $primary_ip4_id
     */
    protected array $primary_ip4_id;

    /**
     * @var array<int> $primary_ip4_id__n
     */
    protected array $primary_ip4_id__n;

    /**
     * @var array<int> $primary_ip6_id
     */
    protected array $primary_ip6_id;

    /**
     * @var array<int> $primary_ip6_id__n
     */
    protected array $primary_ip6_id__n;
    protected string $q;

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
     * @var array<string> $device_role
     */
    protected array $device_role;

    /**
     * @var array<string> $device_role__n
     */
    protected array $device_role__n;

    /**
     * @var array<int> $device_role_id
     */
    protected array $device_role_id;

    /**
     * @var array<int> $device_role_id__n
     */
    protected array $device_role_id__n;

    /**
     * @var array<string>
     */
    protected array $serial;

    protected bool $serial__empty;

    /**
     * @var array<string> $serial__ic
     */
    protected array $serial__ic;

    /**
     * @var array<string> $serial__ie
     */
    protected array $serial__ie;

    /**
     * @var array<string> $serial__iew
     */
    protected array $serial__iew;

    /**
     * @var array<string> $serial__isw
     */
    protected array $serial__isw;

    /**
     * @var array<string> $serial__n
     */
    protected array $serial__n;

    /**
     * @var array<string> $serial__nic
     */
    protected array $serial__nic;

    /**
     * @var array<string> $serial__nie
     */
    protected array $serial__nie;

    /**
     * @var array<string> $serial__niew
     */
    protected array $serial__niew;

    /**
     * @var array<string> $serial__nisw
     */
    protected array $serial__nisw;

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
     * @var array<string>
     */
    protected array $status;

    /**
     * @var array<string> $status__n
     */
    protected array $status__n;

    /**
     * @var array<string> $tag
     */
    protected array $tag;

    /**
     * @var array<string> $tag__n
     */
    protected array $tag__n;

    /**
     * @var array<string> $tenant
     */
    protected array $tenant;

    /**
     * @var array<string> $tenant__n
     */
    protected array $tenant__n;

    /**
     * @var array<int> $tenant_group
     */
    protected array $tenant_group;

    /**
     * @var array<int> $tenant_group__n
     */
    protected array $tenant_group__n;

    /**
     * @var array<int> $tenant_group_id
     */
    protected array $tenant_group_id;

    /**
     * @var array<int> $tenant_group_id__n
     */
    protected array $tenant_group_id__n;

    /**
     * @var array<int> $tenant_id
     */
    protected array $tenant_id;

    /**
     * @var array<int> $tenant_id__n
     */
    protected array $tenant_id__n;
    protected string $updated_by_request; // UUID

    /**
     * @var array<int> $vc_position
     */
    protected array $vc_position;
    protected bool $vc_position__empty;

    /**
     * @var array<int> $vc_position__gt
     */
    protected array $vc_position__gt;

    /**
     * @var array<int> $vc_position__gte
     */
    protected array $vc_position__gte;

    /**
     * @var array<int> $vc_position__lt
     */
    protected array $vc_position__lt;

    /**
     * @var array<int> $vc_position__lte
     */
    protected array $vc_position__lte;

    /**
     * @var array<int> $vc_position__n
     */
    protected array $vc_position__n;

    /**
     * @var array<int> $vc_priority
     */
    protected array $vc_priority;
    protected bool $vc_priority__empty;

    /**
     * @var array<int> $vc_priority__gt
     */
    protected array $vc_priority__gt;

    /**
     * @var array<int> $vc_priority__gte
     */
    protected array $vc_priority__gte;

    /**
     * @var array<int> $vc_priority__lt
     */
    protected array $vc_priority__lt;

    /**
     * @var array<int> $vc_priority__lte
     */
    protected array $vc_priority__lte;

    /**
     * @var array<int> $vc_priority__n
     */
    protected array $vc_priority__n;

    /**
     * @var array<int> $virtual_chassis_id
     */
    protected array $virtual_chassis_id;

    /**
     * @var array<int> $virtual_chassis_id__n
     */
    protected array $virtual_chassis_id__n;

    /**
     * @var array<int> $virtual_chassis_member
     */
    protected array $virtual_chassis_member;
}