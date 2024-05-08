<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Circuits;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class CircuitTerminations extends Params_Core implements ParamsInterface
{
    protected string $cable_end;
    protected string $cable_end__n;
    protected bool $cabled;

    /**
     * @var int|array<int> $circuit_id
     */
    protected int|array $circuit_id;

    /**
     * @var int|array<int> $circuit_id__n
     */
    protected int|array $circuit_id__n;

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
    protected string $modified_by_request;
    protected bool $occupied;
    protected int $offset;
    protected string $ordering;

    /**
     * @var int|array<int> $port_speed
     */
    protected int|array $port_speed;
    protected bool $port_speed__empty;

    /**
     * @var int|array<int> $port_speed__gt
     */
    protected int|array $port_speed__gt;

    /**
     * @var int|array<int> $port_speed__gte
     */
    protected int|array $port_speed__gte;

    /**
     * @var int|array<int> $port_speed__lt
     */
    protected int|array $port_speed__lt;

    /**
     * @var int|array<int> $port_speed__lte
     */
    protected int|array $port_speed__lte;

    /**
     * @var int|array<int> $port_speed__n
     */
    protected int|array $port_speed__n;

    /**
     * @var int|array<int> $provider_network_id
     */
    protected int|array $provider_network_id;

    /**
     * @var int|array<int> $provider_network_id__n
     */
    protected int|array $provider_network_id__n;
    protected string $q;

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
    protected string $term_side;
    protected string $term_side__n;
    protected string $updated_by_request;

    /**
     * @var int|array<int> $upstream_speed
     */
    protected int|array $upstream_speed;
    protected bool $upstream_speed__empty;

    /**
     * @var int|array<int> $upstream_speed__gt
     */
    protected int|array $upstream_speed__gt;

    /**
     * @var int|array<int> $upstream_speed__gte
     */
    protected int|array $upstream_speed__gte;

    /**
     * @var int|array<int> $upstream_speed__lt
     */
    protected int|array $upstream_speed__lt;

    /**
     * @var int|array<int> $upstream_speed__lte
     */
    protected int|array $upstream_speed__lte;

    /**
     * @var int|array<int> $upstream_speed__n
     */
    protected int|array $upstream_speed__n;

    /**
     * @var string|array<string> $xconnect_id
     */
    protected string|array $xconnect_id;
    protected bool $xconnect_id__empty;

    /**
     * @var string|array<string> $xconnect_id__ic
     */
    protected string|array $xconnect_id__ic;

    /**
     * @var string|array<string> $xconnect_id__ie
     */
    protected string|array $xconnect_id__ie;

    /**
     * @var string|array<string> $xconnect_id__iew
     */
    protected string|array $xconnect_id__iew;

    /**
     * @var string|array<string> $xconnect_id__isw
     */
    protected string|array $xconnect_id__isw;

    /**
     * @var string|array<string> $xconnect_id__n
     */
    protected string|array $xconnect_id__n;

    /**
     * @var string|array<string> $xconnect_id__nic
     */
    protected string|array $xconnect_id__nic;

    /**
     * @var string|array<string> $xconnect_id__nie
     */
    protected string|array $xconnect_id__nie;

    /**
     * @var string|array<string> $xconnect_id__niew
     */
    protected string|array $xconnect_id__niew;

    /**
     * @var string|array<string> $xconnect_id__nisw
     */
    protected string|array $xconnect_id__nisw;
}