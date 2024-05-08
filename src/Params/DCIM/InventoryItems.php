<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class InventoryItems extends Params_Core implements ParamsInterface
{

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
     * @var int|array<int> $component_id
     */
    protected int|array $component_id;

    /**
     * @var int|array<int> $component_id__empty
     */
    protected int|array $component_id__empty;

    /**
     * @var int|array<int> $component_id__gt
     */
    protected int|array $component_id__gt;

    /**
     * @var int|array<int> $component_id__gte
     */
    protected int|array $component_id__gte;

    /**
     * @var int|array<int> $component_id__lt
     */
    protected int|array $component_id__lt;

    /**
     * @var int|array<int> $component_id__lte
     */
    protected int|array $component_id__lte;

    /**
     * @var int|array<int> $component_id__n
     */
    protected int|array $component_id__n;
    protected string $component_type;
    protected string $component_type__n;
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
     * @var string|array<string> $device
     */
    protected string|array $device;

    /**
     * @var string|array<string> $device__n
     */
    protected string|array $device__n;

    /**
     * @var int|array<int> $device_id
     */
    protected int|array $device_id;

    /**
     * @var int|array<int> $device_id__n
     */
    protected int|array $device_id__n;

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
    protected bool $discovered;

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
    protected string $modified_by_request;

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
     * @var string|array<string> $part_id
     */
    protected string|array $part_id;
    protected bool $part_id__empty;

    /**
     * @var string|array<string> $part_id__ic
     */
    protected string|array $part_id__ic;

    /**
     * @var string|array<string> $part_id__ie
     */
    protected string|array $part_id__ie;

    /**
     * @var string|array<string> $part_id__iew
     */
    protected string|array $part_id__iew;

    /**
     * @var string|array<string> $part_id__isw
     */
    protected string|array $part_id__isw;

    /**
     * @var string|array<string> $part_id__n
     */
    protected string|array $part_id__n;

    /**
     * @var string|array<string> $part_id__nic
     */
    protected string|array $part_id__nic;

    /**
     * @var string|array<string> $part_id__nie
     */
    protected string|array $part_id__nie;

    /**
     * @var string|array<string> $part_id__niew
     */
    protected string|array $part_id__niew;

    /**
     * @var string|array<string> $part_id__nisw
     */
    protected string|array $part_id__nisw;
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
     * @var string|array<string> $serial
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
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;
    protected string $updated_by_request;

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
}