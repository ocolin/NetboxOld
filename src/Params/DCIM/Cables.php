<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Cables extends Params_Core implements ParamsInterface
{
    /**
     * @var int|array<int> $circuittermination_id
     */
    protected int|array $circuittermination_id;

    /**
     * @var string|array<string> $color
     */
    protected string|array $color;

    /**
     * @var string|array<string> $color__n
     */
    protected string|array $color__n;

    /**
     * @var int|array<int> $consoleport_id
     */
    protected int|array $consoleport_id;

    /**
     * @var int|array<int> $consoleserverport_id
     */
    protected int|array $consoleserverport_id;

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
     * @var int|array<int> $frontport_id
     */
    protected int|array $frontport_id;

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
     * @var int|array<int> $interface_id
     */
    protected int|array $interface_id;

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

    /**
     * @var int|float|array<int|float> $length
     */
    protected int|float|array $length;
    protected bool $length__empty;

    /**
     * @var int|float|array<int|float> $length__gt
     */
    protected int|float|array $length__gt;

    /**
     * @var int|float|array<int|float> $length__gte
     */
    protected int|float|array $length__gte;

    /**
     * @var int|float|array<int|float> $length__lt
     */
    protected int|float|array $length__lt;

    /**
     * @var int|float|array<int|float> $length__lte
     */
    protected int|float|array $length__lte;

    /**
     * @var int|float|array<int|float> $length__n
     */
    protected int|float|array $length__n;
    protected int $limit;

    /**
     * @var string|array<string> $location
     */
    protected string|array $location;

    /**
     * @var int|array<int> $location_id
     */
    protected int|array $location_id;

    /**
     * @var int|array<int> $powerfeed_id
     */
    protected int|array $powerfeed_id;

    /**
     * @var int|array<int> $poweroutlet_id
     */
    protected int|array $poweroutlet_id;

    /**
     * @var int|array<int> $powerport_id
     */
    protected int|array $powerport_id;
    protected string $q;

    /**
     * @var int|array<int> $rack_id
     */
    protected int|array $rack_id;

    /**
     * @var int|array<int> $rearport_id
     */
    protected int|array $rearport_id;

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

    /**
     * @var int|array<int> $termination_a_id
     */
    protected int|array $termination_a_id;
    protected string $termination_a_type;
    protected string $termination_a_type__n;

    /**
     * @var int|array<int> $termination_b_id
     */
    protected int|array $termination_b_id;
    protected string $termination_b_type;
    protected string $termination_b_type__n;

    /**
     * @var string|array<string> $type
     */
    protected string|array $type;

    /**
     * @var string|array<string> $type__n
     */
    protected string|array $type__n;
    protected bool $unterminated;
    protected string $updated_by_request; // UUID
}