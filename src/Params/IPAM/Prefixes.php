<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\IPAM;

use Cruzio\lib\Netbox\Params\Params_Core;
use \Cruzio\lib\Netbox\Params\ParamsInterface;

class Prefixes extends Params_Core implements ParamsInterface
{
    /**
     * @var int|array<int> $children
     */
    protected int|array $children;

    /**
     * @var int|array<int> $children__empty
     */
    protected int|array $children__empty;

    /**
     * @var int|array<int> $children__gt
     */
    protected int|array $children__gt;

    /**
     * @var int|array<int> $children__gte
     */
    protected int|array $children__gte;

    /**
     * @var int|array<int> $children__lt
     */
    protected int|array $children__lt;

    /**
     * @var int|array<int> $children__lte
     */
    protected int|array $children__lte;

    /**
     * @var int|array<int> $children__n
     */
    protected int|array $children__n;
    protected string $contains;
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
     * @var int|array<int> $depth
     */
    protected int|array $depth;

    /**
     * @var int|array<int> $depth__empty
     */
    protected int|array $depth__empty;

    /**
     * @var int|array<int> $depth__gt
     */
    protected int|array $depth__gt;

    /**
     * @var int|array<int> $depth__gte
     */
    protected int|array $depth__gte;

    /**
     * @var int|array<int> $depth__lt
     */
    protected int|array $depth__lt;

    /**
     * @var int|array<int> $depth__lte
     */
    protected int|array $depth__lte;

    /**
     * @var int|array<int> $depth__n
     */
    protected int|array $depth__n;


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
    protected int   $family;

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

    protected bool $is_pool;

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
    protected bool $mark_utilized;

    /**
     * @var int|array<int> $mask_length
     */
    protected int|array $mask_length;
    protected int|float $mask_length__gte;
    protected int|float $mask_length__lte;
    protected string $modified_by_request; // UUID
    protected int    $offset;
    protected string $ordering;
    protected string $prefix;
    protected string $present_in_vrf;
    protected string $present_in_vrf_id;

    protected string $q;


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
     * @var int|array<int> $vlan_id
     */
    protected int|array $vlan_id;

    /**
     * @var int|array<int> $vlan_id__n
     */
    protected int|array $vlan_id__n;
    protected int $vlan_vid;
    protected int $vlan_vid__empty;
    protected int $vlan_vid__gt;
    protected int $vlan_vid__gte;
    protected int $vlan_vid__lt;
    protected int $vlan_vid__lte;
    protected int $vlan_vid__n;

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
    protected string $within;
    protected string $within_include;

}