<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class InventoryItemTemplates extends Params_Core implements ParamsInterface
{

    /**
     * @var array<int> $component_id
     */
    protected array $component_id;

    /**
     * @var array<int> $component_id__empty
     */
    protected array $component_id__empty;

    /**
     * @var array<int> $component_id__gt
     */
    protected array $component_id__gt;

    /**
     * @var array<int> $component_id__gte
     */
    protected array $component_id__gte;

    /**
     * @var array<int> $component_id__lt
     */
    protected array $component_id__lt;

    /**
     * @var array<int> $component_id__lte
     */
    protected array $component_id__lte;

    /**
     * @var array<int> $component_id__n
     */
    protected array $component_id__n;
    protected string $component_type;
    protected string $component_type__n;
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
    protected string $modified_by_request;

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
     * @var array<string> $part_id
     */
    protected array $part_id;
    protected bool $part_id__empty;

    /**
     * @var array<string> $part_id__ic
     */
    protected array $part_id__ic;

    /**
     * @var array<string> $part_id__ie
     */
    protected array $part_id__ie;

    /**
     * @var array<string> $part_id__iew
     */
    protected array $part_id__iew;

    /**
     * @var array<string> $part_id__isw
     */
    protected array $part_id__isw;

    /**
     * @var array<string> $part_id__n
     */
    protected array $part_id__n;

    /**
     * @var array<string> $part_id__nic
     */
    protected array $part_id__nic;

    /**
     * @var array<string> $part_id__nie
     */
    protected array $part_id__nie;

    /**
     * @var array<string> $part_id__niew
     */
    protected array $part_id__niew;

    /**
     * @var array<string> $part_id__nisw
     */
    protected array $part_id__nisw;
    protected string $q;

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
    protected string $updated_by_request;
}