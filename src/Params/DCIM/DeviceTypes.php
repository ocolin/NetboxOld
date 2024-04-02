<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class DeviceTypes extends Params_Core implements ParamsInterface
{
    protected string $airflow;
    protected string $airflow__n;

    protected bool $console_ports;
    protected bool $console_server_ports;

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
     * @var string|array<string> $default_platform
     */
    protected string|array $default_platform;

    /**
     * @var string|array<string> $default_platform__n
     */
    protected string|array $default_platform__n;

    /**
     * @var int|array<int> $default_platform_id
     */
    protected int|array $default_platform_id;

    /**
     * @var int|array<int> $default_platform_id__n
     */
    protected int|array $default_platform_id__n;

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

    protected bool $exclude_from_utilization;
    protected bool $has_front_image;
    protected bool $has_rear_image;

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
    protected bool $inventory_items;
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
    protected int $limit;

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
     * @var string|array<string>
     */
    protected string|array $model;
    protected bool $model__empty;

    /**
     * @var string|array<string> $model__ic
     */
    protected string|array $model__ic;

    /**
     * @var string|array<string> $model__ie
     */
    protected string|array $model__ie;

    /**
     * @var string|array<string> $model__iew
     */
    protected string|array $model__iew;

    /**
     * @var string|array<string> $model__isw
     */
    protected string|array $model__isw;

    /**
     * @var string|array<string> $model__n
     */
    protected string|array $model__n;

    /**
     * @var string|array<string> $model__nic
     */
    protected string|array $model__nic;

    /**
     * @var string|array<string> $model__nie
     */
    protected string|array $model__nie;

    /**
     * @var string|array<string> $model__niew
     */
    protected string|array $model__niew;

    /**
     * @var string|array<string> $model__nisw
     */
    protected string|array $model__nisw;

    protected string $modified_by_request;
    protected bool $module_bays;
    protected int $offset;
    protected string $ordering;

    /**
     * @var string|array<string>
     */
    protected string|array $part_number;

    protected bool $part_number__empty;

    /**
     * @var string|array<string> $part_number__ic
     */
    protected string|array $part_number__ic;

    /**
     * @var string|array<string> $part_number__ie
     */
    protected string|array $part_number__ie;

    /**
     * @var string|array<string> $part_number__iew
     */
    protected string|array $part_number__iew;

    /**
     * @var string|array<string> $part_number__isw
     */
    protected string|array $part_number__isw;

    /**
     * @var string|array<string> $part_number__n
     */
    protected string|array $part_number__n;

    /**
     * @var string|array<string> $part_number__nic
     */
    protected string|array $part_number__nic;

    /**
     * @var string|array<string> $part_number__nie
     */
    protected string|array $part_number__nie;

    /**
     * @var string|array<string> $part_number__niew
     */
    protected string|array $part_number__niew;

    /**
     * @var string|array<string> $part_number__nisw
     */
    protected string|array $part_number__nisw;
    protected bool $pass_through_ports;
    protected bool $power_outlets;
    protected bool $power_ports;
    protected string $q;

    /**
     * @var string|array<string> $slug
     */
    protected string|array $slug;
    protected bool $slug__empty;

    /**
     * @var string|array<string> $slug__ic
     */
    protected string|array $slug__ic;

    /**
     * @var string|array<string> $slug__ie
     */
    protected string|array $slug__ie;

    /**
     * @var string|array<string> $slug__iew
     */
    protected string|array $slug__iew;

    /**
     * @var string|array<string> $slug__isw
     */
    protected string|array $slug__isw;

    /**
     * @var string|array<string> $slug__n
     */
    protected string|array $slug__n;

    /**
     * @var string|array<string> $slug__nic
     */
    protected string|array $slug__nic;

    /**
     * @var string|array<string> $slug__nie
     */
    protected string|array $slug__nie;

    /**
     * @var string|array<string> $slug__niew
     */
    protected string|array $slug__niew;

    /**
     * @var string|array<string> $slug__nisw
     */
    protected string|array $slug__nisw;

    protected string $subdevice_role;
    protected string $subdevice_role__n;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;

    /**
     * @var int|float|array<int|float> $u_height
     */
    protected int|float|array $u_height;

    /**
     * @var int|float|array<int|float> $u_height__empty
     */
    protected int|float|array $u_height__empty;

    /**
     * @var int|float|array<int|float> $u_height__gt
     */
    protected int|float|array $u_height__gt;

    /**
     * @var int|float|array<int|float> $u_height__gte
     */
    protected int|float|array $u_height__gte;

    /**
     * @var int|float|array<int|float> $u_height__lt
     */
    protected int|float|array $u_height__lt;

    /**
     * @var int|float|array<int|float> $u_height__lte
     */
    protected int|float|array $u_height__lte;

    /**
     * @var int|float|array<int|float> $u_height__n
     */
    protected int|float|array $u_height__n;

    protected bool $updated_by_request;

    /**
     * @var int|float|array<int|float> $weight
     */
    protected int|float|array $weight;

    protected bool $weight__empty;

    /**
     * @var int|float|array<int|float> $weight__gt
     */
    protected int|float|array $weight__gt;

    /**
     * @var int|float|array<int|float> $weight__gte
     */
    protected int|float|array $weight__gte;

    /**
     * @var int|float|array<int|float> $weight__lt
     */
    protected int|float|array $weight__lt;

    /**
     * @var int|float|array<int|float> $weight__lte
     */
    protected int|float|array $weight__lte;

    /**
     * @var int|float|array<int|float> $weight__n
     */
    protected int|float|array $weight__n;

    protected string $weight_unit;
    protected string $weight_unit__n;

}