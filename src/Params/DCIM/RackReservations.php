<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class RackReservations extends Params_Core implements ParamsInterface
{

    /**
     * @var array<string> $created
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
     * @var array<int> $location Slug
     */
    protected array $location;

    /**
     * @var array<int> $location__n Slug
     */
    protected array $location__n;

    /**
     * @var array<int> $location_id
     */
    protected array $location_id;

    /**
     * @var array<int> $location_id__n
     */
    protected array $location_id__n;

    protected string $modified_by_request;
    protected int $offset;
    protected string $ordering;
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
     * @var array<string> $tag
     */
    protected array $tag;

    /**
     * @var array<string> $tag__n
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
    protected string $updated_by_request; // UUID

    /**
     * @var array<string> $user
     */
    protected array $user;

    /**
     * @var array<int> $user__n
     */
    protected array $user__n;

    /**
     * @var array<int> $user_id
     */
    protected array $user_id;

    /**
     * @var array<int> $user_id__n
     */
    protected array $user_id__n;

}