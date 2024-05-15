<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\IPAM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class FhrpGroupAssignments extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $created
     */
    protected string|array $created;

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
    protected string $created_by_request; // UUID

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
    protected bool $interface_id__empty;

    /**
     * @var int|array<int> $interface_id__gt
     */
    protected int|array $interface_id__gt;

    /**
     * @var int|array<int> $interface_id__gte
     */
    protected int|array $interface_id__gte;

    /**
     * @var int|array<int> $interface_id__lt
     */
    protected int|array $interface_id__lt;

    /**
     * @var int|array<int> $interface_id__lte
     */
    protected int|array $interface_id__lte;

    /**
     * @var int|array<int> $interface_id__n
     */
    protected int|array $interface_id__n;

    protected string $interface_type;
    protected string $interface_type__n;

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
    protected int    $limit;
    protected string $modified_by_request; // UUID
    protected int    $offset;
    protected string $ordering;

    /**
     * @var int|array<int> $priority
     */
    protected int|array $priority;
    protected bool $priority__empty;

    /**
     * @var int|array<int> $priority__gt
     */
    protected int|array $priority__gt;

    /**
     * @var int|array<int> $priority__gte
     */
    protected int|array $priority__gte;

    /**
     * @var int|array<int> $priority__lt
     */
    protected int|array $priority__lt;

    /**
     * @var int|array<int> $priority__lte
     */
    protected int|array $priority__lte;

    /**
     * @var int|array<int> $priority__n
     */
    protected int|array $priority__n;

    protected string $updated_by_request; // UUID

    /**
     * @var string|array<string> $virtual_machine
     */
    protected string|array $virtual_machine;

    /**
     * @var int|array<int> $virtual_machine_id
     */
    protected int|array $virtual_machine_id;

}