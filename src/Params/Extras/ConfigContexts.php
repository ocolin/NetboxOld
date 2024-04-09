<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Extras;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class ConfigContexts extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $cluster_group
     */
    protected string|array $cluster_group;

    /**
     * @var string|array<string> $cluster_group__n
     */
    protected string|array $cluster_group__n;

    /**
     * @var int|array<int> $cluster_group_id
     */
    protected int|array $cluster_group_id;

    /**
     * @var int|array<int> $cluster_group_id__n
     */
    protected int|array $cluster_group_id__n;

    /**
     * @var int|array<int> $cluster_id
     */
    protected int|array $cluster_id;

    /**
     * @var int|array<int> $cluster_id__n
     */
    protected int|array $cluster_id__n;

    /**
     * @var string|array<string> $cluster_type
     */
    protected string|array $cluster_type;

    /**
     * @var string|array<string> $cluster_type__n
     */
    protected string|array $cluster_type__n;

    /**
     * @var int|array<int> $cluster_type_id
     */
    protected int|array $cluster_type_id;

    /**
     * @var int|array<int> $cluster_type_id__n
     */
    protected int|array $cluster_type_id__n;

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
     * @var int|array<int> $data_file_id
     */
    protected int|array $data_file_id;

    /**
     * @var int|array<int> $data_file_id__n
     */
    protected int|array $data_file_id__n;

    /**
     * @var int|array<int> $data_source_id
     */
    protected int|array $data_source_id;

    /**
     * @var int|array<int> $data_source_id__n
     */
    protected int|array $data_source_id__n;

    /**
     * @var string|array<string> $data_synced
     */
    protected string|array $data_synced;
    protected bool $data_synced__empty;

    /**
     * @var string|array<string> $data_synced__gt
     */
    protected string|array $data_synced__gt;

    /**
     * @var string|array<string> $data_synced__gte
     */
    protected string|array $data_synced__gte;

    /**
     * @var string|array<string> $data_synced__lt
     */
    protected string|array $data_synced__lt;

    /**
     * @var string|array<string> $data_synced__lte
     */
    protected string|array $data_synced__lte;

    /**
     * @var string|array<string> $data_synced__n
     */
    protected string|array $data_synced__n;

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

    protected int $limit;

    /**
     * @var string|array<string> $location
     */
    protected string|array $location;

    /**
     * @var string|array<string> $location__n
     */
    protected string|array $location__n;

    /**
     * @var string|array<string> $location_id
     */
    protected string|array $location_id;

    /**
     * @var string|array<string> $location_id__n
     */
    protected string|array $location_id__n;
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

    /**
     * @var string|array<string> $platform
     */
    protected string|array $platform;

    /**
     * @var string|array<string> $platform__n
     */
    protected string|array $platform__n;

    /**
     * @var int|array<int> $platform_id
     */
    protected int|array $platform_id;

    /**
     * @var int|array<int> $platform_id__n
     */
    protected int|array $platform_id__n;

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
     * @var int|array<int> $role_id
     */
    protected int|array $role_id;

    /**
     * @var int|array<int> $role_id__n
     */
    protected int|array $role_id__n;

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

    /**
     * @var string|array<string> $tag_id
     */
    protected string|array $tag_id;

    /**
     * @var string|array<string> $tag_id__n
     */
    protected string|array $tag_id__n;

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
}