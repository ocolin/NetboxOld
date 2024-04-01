<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class PowerFeeds extends Params_Core implements ParamsInterface
{
    /**
     * @var array<int>
     */
    protected array $amperage;

    protected bool $amperage__empty;

    /**
     * @var array<int> $amperage__gt
     */
    protected array $amperage__gt;

    /**
     * @var array<int> $amperage__gte
     */
    protected array $amperage__gte;

    /**
     * @var array<int> $amperage__lt
     */
    protected array $amperage__lt;

    /**
     * @var array<int> $amperage__lte
     */
    protected array $amperage__lte;

    /**
     * @var array<int> $amperage__n
     */
    protected array $amperage__n;
    protected string $cable_end;
    protected string $cable_end__n;

    protected bool $cabled;
    protected bool $connected;

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
     * @var array<int> $id
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
     * @var array<int> $max_utilization
     */
    protected array $max_utilization;

    protected bool $max_utilization__empty;

    /**
     * @var array<int> $max_utilization__gt
     */
    protected array $max_utilization__gt;

    /**
     * @var array<int> $max_utilization__gte
     */
    protected array $max_utilization__gte;

    /**
     * @var array<int> $max_utilization__lt
     */
    protected array $max_utilization__lt;

    /**
     * @var array<int> $max_utilization__lte
     */
    protected array $max_utilization__lte;

    /**
     * @var array<int> $max_utilization__n
     */
    protected array $max_utilization__n;
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
    protected bool $occupied;
    protected int $offset;
    protected string $ordering;
    protected string $phase;
    protected string $phase__n;

    /**
     * @var array<int> $power_panel_id
     */
    protected array $power_panel_id;

    /**
     * @var array<int> $power_panel_id__n
     */
    protected array $power_panel_id__n;
    protected string $q;

    /**
     * @var array<int> $rack_id
     */
    protected array $rack_id;

    /**
     * @var array<int> $rack_id__n
     */
    protected array $rack_id__n;

    /**
     * @var array<int> $region
     */
    protected array $region;

    /**
     * @var array<int> $region__n
     */
    protected array $region__n;

    /**
     * @var array<int> $region_id
     */
    protected array $region_id;

    /**
     * @var array<int> $region_id__n
     */
    protected array $region_id__n;

    /**
     * @var array<string> $site
     */
    protected array $site;

    /**
     * @var array<string> $site__n
     */
    protected array $site__n;

    /**
     * @var array<int> $site_group
     */
    protected array $site_group;

    /**
     * @var array<int> $site_group__n
     */
    protected array $site_group__n;

    /**
     * @var array<int> $site_group_id
     */
    protected array $site_group_id;

    /**
     * @var array<int> $site_group_id__n
     */
    protected array $site_group_id__n;

    /**
     * @var array<int> $site_id
     */
    protected array $site_id;

    /**
     * @var array<int> $site_id__n
     */
    protected array $site_id__n;

    /**
     * @var array<string> $status
     */
    protected array $status;

    /**
     * @var array<string> $status__n
     */
    protected array $status__n;
    protected string $supply;
    protected string $supply__n;

    /**
     * @var array<string>
     */
    protected array $tag;

    /**
     * @var array<string>
     */
    protected array $tag__n;

    /**
     * @var array<string> $tenant
     */
    protected array $tenant;

    /**
     * @var array<string> $tenant__n
     */
    protected array $tenant__n;

    /**
     * @var array<int> $tenant_group
     */
    protected array $tenant_group;

    /**
     * @var array<int> $tenant_group__n
     */
    protected array $tenant_group__n;

    /**
     * @var array<int> $tenant_group_id
     */
    protected array $tenant_group_id;

    /**
     * @var array<int> $tenant_group_id__n
     */
    protected array $tenant_group_id__n;

    /**
     * @var array<int> $tenant_id
     */
    protected array $tenant_id;

    /**
     * @var array<int> $tenant_id__n
     */
    protected array $tenant_id__n;
    protected string $type;
    protected string $type__n;
    protected string $updated_by_request;

    /**
     * @var array<int> $voltage
     */
    protected array $voltage;
    protected bool $voltage__empty;

    /**
     * @var array<int> $voltage__gt
     */
    protected array $voltage__gt;

    /**
     * @var array<int> $voltage__gte
     */
    protected array $voltage__gte;

    /**
     * @var array<int> $voltage__lt
     */
    protected array $voltage__lt;

    /**
     * @var array<int> $voltage__lte
     */
    protected array $voltage__lte;

    /**
     * @var array<int> $voltage__n
     */
    protected array $voltage__n;
}