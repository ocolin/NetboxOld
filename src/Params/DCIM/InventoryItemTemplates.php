<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class InventoryItemTemplates extends Params_Core implements ParamsInterface
{
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
    protected string $updated_by_request;
}