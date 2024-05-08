<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Virtualization;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Interfaces extends Params_Core implements ParamsInterface
{
    /**
     * @var int|array<int> $bridge_id
     */
    protected int|array $bridge_id;

    /**
     * @var int|array<int> $bridge_id__n
     */
    protected int|array $bridge_id__n;

    /**
     * @var int|array<int> $cluster
     */
    protected int|array $cluster;

    /**
     * @var int|array<int> $cluster__n
     */
    protected int|array $cluster__n;

    /**
     * @var int|array<int> $cluster_id
     */
    protected int|array $cluster_id;

    /**
     * @var int|array<int> $cluster_id__n
     */
    protected int|array $cluster_id__n;

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
    protected bool $enabled;

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
     * @var int|array<int> $l2vpn
     */
    protected int|array $l2vpn;

    /**
     * @var int|array<int> $l2vpn__n
     */
    protected int|array $l2vpn__n;

    /**
     * @var int|array<int> $l2vpn_id
     */
    protected int|array $l2vpn_id;

    /**
     * @var int|array<int> $l2vpn_id__n
     */
    protected int|array $l2vpn_id__n;

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
     * @var string|array<string> $mac_address
     */
    protected string|array $mac_address;

    /**
     * @var string|array<string> $mac_address__ic
     */
    protected string|array $mac_address__ic;

    /**
     * @var string|array<string> $mac_address__ie
     */
    protected string|array $mac_address__ie;

    /**
     * @var string|array<string> $mac_address__iew
     */
    protected string|array $mac_address__iew;

    /**
     * @var string|array<string> $mac_address__isw
     */
    protected string|array $mac_address__isw;

    /**
     * @var string|array<string> $mac_address__n
     */
    protected string|array $mac_address__n;

    /**
     * @var string|array<string> $mac_address__nic
     */
    protected string|array $mac_address__nic;

    /**
     * @var string|array<string> $mac_address__nie
     */
    protected string|array $mac_address__nie;

    /**
     * @var string|array<string> $mac_address__niew
     */
    protected string|array $mac_address__niew;

    /**
     * @var string|array<string> $mac_address__nisw
     */
    protected string|array $mac_address__nisw;
    protected string $modified_by_request; // UUID

    /**
     * @var int|array<int> $mtu
     */
    protected int|array $mtu;

    protected bool $mtu__empty;

    /**
     * @var int|array<int> $mtu__gt
     */
    protected int|array $mtu__gt;

    /**
     * @var int|array<int> $mtu__gte
     */
    protected int|array $mtu__gte;

    /**
     * @var int|array<int> $mtu__lt
     */
    protected int|array $mtu__lt;

    /**
     * @var int|array<int> $mtu__lte
     */
    protected int|array $mtu__lte;

    /**
     * @var int|array<int> $mtu__n
     */
    protected int|array $mtu__n;

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
    protected string $q;

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
     * @var string|array<string> $virtual_machine
     */
    protected string|array $virtual_machine;

    /**
     * @var string|array<string> $virtual_machine__n
     */
    protected string|array $virtual_machine__n;

    /**
     * @var int|array<int> $virtual_machine_id
     */
    protected int|array $virtual_machine_id;

    /**
     * @var int|array<int> $virtual_machine_id__n
     */
    protected int|array $virtual_machine_id__n;
    protected string $vlan;
    protected string $vlan_id;

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