<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\IPAM;

use Cruzio\lib\Netbox\Params\Params_Core;
use \Cruzio\lib\Netbox\Params\ParamsInterface;

class IpAddresses extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $address
     */
    protected string|array $address;
    protected bool $assigned;
    protected bool $assigned_to_interface;
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
     * @var string|array<string> $description
     */
    protected string|array $description;
    protected bool  $description__empty;

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
     * @var int|array<int> $device_id
     */
    protected int|array $device_id;

    /**
     * @var string|array<string> $dns_name
     */
    protected string|array $dns_name;
    protected bool $dns_name__empty;

    /**
     * @var string|array<string> $dns_name__ic
     */
    protected string|array $dns_name__ic;

    /**
     * @var string|array<string> $dns_name__ie
     */
    protected string|array $dns_name__ie;

    /**
     * @var string|array<string> $dns_name__iew
     */
    protected string|array $dns_name__iew;

    /**
     * @var string|array<string> $dns_name__isw
     */
    protected string|array $dns_name__isw;

    /**
     * @var string|array<string> $dns_name__n
     */
    protected string|array $dns_name__n;

    /**
     * @var string|array<string> $dns_name__nic
     */
    protected string|array $dns_name__nic;

    /**
     * @var string|array<string> $dns_name__nie
     */
    protected string|array $dns_name__nie;

    /**
     * @var string|array<string> $dns_name__niew
     */
    protected string|array $dns_name__niew;

    /**
     * @var string|array<string> $dns_name__nisw
     */
    protected string|array $dns_name__nisw;

    protected int|float $family;

    /**
     * @var int|array<int> $fhrpgroup_id
     */
    protected int|array $fhrpgroup_id;

    /**
     * @var int|array<int> $fhrpgroup_id__n
     */
    protected int|array $fhrpgroup_id__n;

    /**
     * @var int|array<int> $id
     */
    protected int|array $id;
    protected bool  $id__empty;

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
     * @var string|array<string> $interface
     */
    protected string|array $interface;

    /**
     * @var string|array<string> $interface__n
     */
    protected string|array $interface__n;

    /**
     * @var string|array<string> $interface_id
     */
    protected string|array $interface_id;

    /**
     * @var string|array<string> $interface_id__n
     */
    protected string|array $interface_id__n;


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

    /**
     * @var int|array<int> $mask_length
     */
    protected int|array $mask_length;
    protected int|float $mask_length__gte;
    protected int|float $mask_length__lte;
    protected string $modified_by_request; // UUID
    protected int    $offset;
    protected string $ordering;

    /**
     * @var string|array<string> $parent
     */
    protected string|array $parent;
    protected string $present_in_vrf;
    protected string $present_in_vrf_id;
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
     * @var string|array<string> $virtual_machine
     */
    protected string|array $virtual_machine;

    /**
     * @var int|array<int> $virtual_machine_id
     */
    protected int|array $virtual_machine_id;

    /**
     * @var string|array<string> $vminterface
     */
    protected string|array $vminterface;

    /**
     * @var string|array<string> $vminterface__n
     */
    protected string|array $vminterface__n;

    /**
     * @var int|array<int> $vminterface_id
     */
    protected int|array $vminterface_id;

    /**
     * @var int|array<int> $vminterface_id__n
     */
    protected int|array $vminterface_id__n;

    /**
     * @var string|array<string> $vrf
     */
    protected string|array $vrf;

    /**
     * @var string|array<string> $vrf__n
     */
    protected string|array $vrf__n;

    /**
     * @var int|array<int> $vrf_id
     */
    protected int|array $vrf_id;

    /**
     * @var int|array<int> $vrf_id__n
     */
    protected int|array $vrf_id__n;
}