<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class PowerFeeds extends Params_Core implements ParamsInterface
{
    /**
     * @var int|array<int>
     */
    protected int|array $amperage;

    protected bool $amperage__empty;

    /**
     * @var int|array<int> $amperage__gt
     */
    protected int|array $amperage__gt;

    /**
     * @var int|array<int> $amperage__gte
     */
    protected int|array $amperage__gte;

    /**
     * @var int|array<int> $amperage__lt
     */
    protected int|array $amperage__lt;

    /**
     * @var int|array<int> $amperage__lte
     */
    protected int|array $amperage__lte;

    /**
     * @var int|array<int> $amperage__n
     */
    protected int|array $amperage__n;
    protected string $cable_end;
    protected string $cable_end__n;

    protected bool $cabled;
    protected bool $connected;

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

    /**
     * @var int|array<int> $max_utilization
     */
    protected int|array $max_utilization;

    protected bool $max_utilization__empty;

    /**
     * @var int|array<int> $max_utilization__gt
     */
    protected int|array $max_utilization__gt;

    /**
     * @var int|array<int> $max_utilization__gte
     */
    protected int|array $max_utilization__gte;

    /**
     * @var int|array<int> $max_utilization__lt
     */
    protected int|array $max_utilization__lt;

    /**
     * @var int|array<int> $max_utilization__lte
     */
    protected int|array $max_utilization__lte;

    /**
     * @var int|array<int> $max_utilization__n
     */
    protected int|array $max_utilization__n;
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
    protected bool $occupied;
    protected int $offset;
    protected string $ordering;
    protected string $phase;
    protected string $phase__n;

    /**
     * @var int|array<int> $power_panel_id
     */
    protected int|array $power_panel_id;

    /**
     * @var int|array<int> $power_panel_id__n
     */
    protected int|array $power_panel_id__n;
    protected string $q;

    /**
     * @var int|array<int> $rack_id
     */
    protected int|array $rack_id;

    /**
     * @var int|array<int> $rack_id__n
     */
    protected int|array $rack_id__n;

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
     * @var string|array<string> $status
     */
    protected string|array $status;

    /**
     * @var string|array<string> $status__n
     */
    protected string|array $status__n;
    protected string $supply;
    protected string $supply__n;

    /**
     * @var string|array<string>
     */
    protected string|array $tag;

    /**
     * @var string|array<string>
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
    protected string $type;
    protected string $type__n;
    protected string $updated_by_request;

    /**
     * @var int|array<int> $voltage
     */
    protected int|array $voltage;
    protected bool $voltage__empty;

    /**
     * @var int|array<int> $voltage__gt
     */
    protected int|array $voltage__gt;

    /**
     * @var int|array<int> $voltage__gte
     */
    protected int|array $voltage__gte;

    /**
     * @var int|array<int> $voltage__lt
     */
    protected int|array $voltage__lt;

    /**
     * @var int|array<int> $voltage__lte
     */
    protected int|array $voltage__lte;

    /**
     * @var int|array<int> $voltage__n
     */
    protected int|array $voltage__n;
}