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
     * @var array<string> $default_platform
     */
    protected array $default_platform;

    /**
     * @var array<string> $default_platform__n
     */
    protected array $default_platform__n;

    /**
     * @var array<int> $default_platform_id
     */
    protected array $default_platform_id;

    /**
     * @var array<int> $default_platform_id__n
     */
    protected array $default_platform_id__n;

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

    protected bool $exclude_from_utilization;

    protected bool $has_front_image;
    protected bool $has_rear_image;

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

    protected bool $inventory_items;
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
    protected int $limit;

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
     * @var array<string>
     */
    protected array $model;
    protected bool $model__empty;

    /**
     * @var array<string> $model__ic
     */
    protected array $model__ic;

    /**
     * @var array<string> $model__ie
     */
    protected array $model__ie;

    /**
     * @var array<string> $model__iew
     */
    protected array $model__iew;

    /**
     * @var array<string> $model__isw
     */
    protected array $model__isw;

    /**
     * @var array<string> $model__n
     */
    protected array $model__n;

    /**
     * @var array<string> $model__nic
     */
    protected array $model__nic;

    /**
     * @var array<string> $model__nie
     */
    protected array $model__nie;

    /**
     * @var array<string> $model__niew
     */
    protected array $model__niew;

    /**
     * @var array<string> $model__nisw
     */
    protected array $model__nisw;

    protected string $modified_by_request;

    protected bool $module_bays;
    protected int $offset;
    protected string $ordering;

    /**
     * @var array<string>
     */
    protected array $part_number;

    protected bool $part_number__empty;

    /**
     * @var array<string> $part_number__ic
     */
    protected array $part_number__ic;

    /**
     * @var array<string> $part_number__ie
     */
    protected array $part_number__ie;

    /**
     * @var array<string> $part_number__iew
     */
    protected array $part_number__iew;

    /**
     * @var array<string> $part_number__isw
     */
    protected array $part_number__isw;

    /**
     * @var array<string> $part_number__n
     */
    protected array $part_number__n;

    /**
     * @var array<string> $part_number__nic
     */
    protected array $part_number__nic;

    /**
     * @var array<string> $part_number__nie
     */
    protected array $part_number__nie;

    /**
     * @var array<string> $part_number__niew
     */
    protected array $part_number__niew;

    /**
     * @var array<string> $part_number__nisw
     */
    protected array $part_number__nisw;

    protected bool $pass_through_ports;
    protected bool $power_outlets;
    protected bool $power_ports;
    protected string $q;

    /**
     * @var array<string> $slug
     */
    protected array $slug;
    protected bool $slug__empty;

    /**
     * @var array<string> $slug__ic
     */
    protected array $slug__ic;

    /**
     * @var array<string> $slug__ie
     */
    protected array $slug__ie;

    /**
     * @var array<string> $slug__iew
     */
    protected array $slug__iew;

    /**
     * @var array<string> $slug__isw
     */
    protected array $slug__isw;

    /**
     * @var array<string> $slug__n
     */
    protected array $slug__n;

    /**
     * @var array<string> $slug__nic
     */
    protected array $slug__nic;

    /**
     * @var array<string> $slug__nie
     */
    protected array $slug__nie;

    /**
     * @var array<string> $slug__niew
     */
    protected array $slug__niew;

    /**
     * @var array<string> $slug__nisw
     */
    protected array $slug__nisw;

    protected string $subdevice_role;
    protected string $subdevice_role__n;

    /**
     * @var array<string> $tag
     */
    protected array $tag;

    /**
     * @var array<string> $tag__n
     */
    protected array $tag__n;

    /**
     * @var array<int|float> $u_height
     */
    protected array $u_height;

    /**
     * @var array<int|float> $u_height__empty
     */
    protected array $u_height__empty;

    /**
     * @var array<int|float> $u_height__gt
     */
    protected array $u_height__gt;

    /**
     * @var array<int|float> $u_height__gte
     */
    protected array $u_height__gte;

    /**
     * @var array<int|float> $u_height__lt
     */
    protected array $u_height__lt;

    /**
     * @var array<int|float> $u_height__lte
     */
    protected array $u_height__lte;

    /**
     * @var array<int|float> $u_height__n
     */
    protected array $u_height__n;

    protected bool $updated_by_request;

    /**
     * @var array<int|float> $weight
     */
    protected array $weight;

    protected bool $weight__empty;

    /**
     * @var array<int|float> $weight__gt
     */
    protected array $weight__gt;

    /**
     * @var array<int|float> $weight__gte
     */
    protected array $weight__gte;

    /**
     * @var array<int|float> $weight__lt
     */
    protected array $weight__lt;

    /**
     * @var array<int|float> $weight__lte
     */
    protected array $weight__lte;

    /**
     * @var array<int|float> $weight__n
     */
    protected array $weight__n;

    protected string $weight_unit;
    protected string $weight_unit__n;

}