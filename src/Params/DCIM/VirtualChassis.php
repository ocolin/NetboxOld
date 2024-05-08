<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class VirtualChassis extends Params_Core implements ParamsInterface
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
     * @var string|array<string> $domain
     */
    protected string|array $domain;
    protected bool $domain__empty;

    /**
     * @var string|array<string> $domain__ic
     */
    protected string|array $domain__ic;

    /**
     * @var string|array<string> $domain__ie
     */
    protected string|array $domain__ie;

    /**
     * @var string|array<string> $domain__iew
     */
    protected string|array $domain__iew;

    /**
     * @var string|array<string> $domain__isw
     */
    protected string|array $domain__isw;

    /**
     * @var string|array<string> $domain__n
     */
    protected string|array $domain__n;

    /**
     * @var string|array<string> $domain__nic
     */
    protected string|array $domain__nic;

    /**
     * @var string|array<string> $domain__nie
     */
    protected string|array $domain__nie;

    /**
     * @var string|array<string> $domain__niew
     */
    protected string|array $domain__niew;

    /**
     * @var string|array<string> $domain__nisw
     */
    protected string|array $domain__nisw;

    /**
     * @var array<int> $id
     */
    protected int|array $id;
    protected bool $id__empty;

    /**
     * @var array<int> $id__gt
     */
    protected int|array $id__gt;

    /**
     * @var array<int> $id__gte
     */
    protected int|array $id__gte;

    /**
     * @var array<int> $id__lt
     */
    protected int|array $id__lt;

    /**
     * @var array<int> $id__lte
     */
    protected int|array $id__lte;

    /**
     * @var array<int> $id__n
     */
    protected int|array $id__n;

    /**
     * @var string|array<string> $last_updated
     */
    protected string|array $last_updated;
    protected bool $last_updated__empty;

    /**
     * @var array<string> $last_updated__gt
     */
    protected string|array $last_updated__gt;

    /**
     * @var array<string> $last_updated__gte
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
     * @var string|array<string> $master
     */
    protected string|array $master;

    /**
     * @var string|array<string> $master__n
     */
    protected string|array $master__n;

    /**
     * @var array<int> $master_id
     */
    protected int|array $master_id;

    /**
     * @var array<int> $master_id__n
     */
    protected int|array $master_id__n;
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
    protected string $q;

    /**
     * @var array<int> $region
     */
    protected int|array $region;

    /**
     * @var array<int> $region__n
     */
    protected int|array $region__n;

    /**
     * @var array<int> $region_id
     */
    protected int|array $region_id;

    /**
     * @var array<int> $region_id__n
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
     * @var array<int> $site_group
     */
    protected int|array $site_group;

    /**
     * @var array<int> $site_group__n
     */
    protected int|array $site_group__n;

    /**
     * @var array<int> $site_group_id
     */
    protected int|array $site_group_id;

    /**
     * @var array<int> $site_group_id__n
     */
    protected int|array $site_group_id__n;

    /**
     * @var array<int> $site_id
     */
    protected int|array $site_id;

    /**
     * @var array<int> $site_id__n
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


    /**
     * @var string|array<string> $tenant
     */
    protected string|array $tenant;

    /**
     * @var string|array<string> $tenant__n
     */
    protected string|array $tenant__n;

    /**
     * @var array<int> $tenant_group
     */
    protected int|array $tenant_group;

    /**
     * @var array<int> $tenant_group__n
     */
    protected int|array $tenant_group__n;

    /**
     * @var array<int> $tenant_group_id
     */
    protected int|array $tenant_group_id;

    /**
     * @var array<int> $tenant_group_id__n
     */
    protected int|array $tenant_group_id__n;

    /**
     * @var array<int> $tenant_id
     */
    protected int|array $tenant_id;

    /**
     * @var array<int> $tenant_id__n
     */
    protected int|array $tenant_id__n;
    protected string $updated_by_request; // UUID
}