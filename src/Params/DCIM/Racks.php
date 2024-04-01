<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Racks extends Params_Core implements ParamsInterface
{

    /**
     * @var array<string> $asset_tag
     */
    protected array $asset_tag;
    protected bool $asset_tag__empty;

    /**
     * @var array<string> $asset_tag__ic
     */
    protected array $asset_tag__ic;

    /**
     * @var array<string> $asset_tag__ie
     */
    protected array $asset_tag__ie;

    /**
     * @var array<string> $asset_tag__iew
     */
    protected array $asset_tag__iew;

    /**
     * @var array<string> $asset_tag__isw
     */
    protected array $asset_tag__isw;

    /**
     * @var array<string> $asset_tag__n
     */
    protected array $asset_tag__n;

    /**
     * @var array<string> $asset_tag__nic
     */
    protected array $asset_tag__nic;

    /**
     * @var array<string> $asset_tag__nie
     */
    protected array $asset_tag__nie;

    /**
     * @var array<string> $asset_tag__niew
     */
    protected array $asset_tag__niew;

    /**
     * @var array<string> $asset_tag__nisw
     */
    protected array $asset_tag__nisw;

    /**
     * @var array<int> $contact
     */
    protected array $contact;

    /**
     * @var array<int> $contact__n
     */
    protected array $contact__n;

    /**
     * @var array<int> $contact_group
     */
    protected array $contact_group;

    /**
     * @var array<int> $contact_group__n
     */
    protected array $contact_group__n;

    /**
     * @var array<int> $contact_role
     */
    protected array $contact_role;

    /**
     * @var array<int> $contact_role__n
     */
    protected array $contact_role__n;

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
     * @var array<string> $facility_id
     */
    protected array $facility_id;
    protected bool $facility_id__empty;

    /**
     * @var array<string> $facility_id__ic
     */
    protected array $facility_id__ic;

    /**
     * @var array<string> $facility_id__ie
     */
    protected array $facility_id__ie;

    /**
     * @var array<string> $facility_id__iew
     */
    protected array $facility_id__iew;

    /**
     * @var array<string> $facility_id__isw
     */
    protected array $facility_id__isw;

    /**
     * @var array<string> $facility_id__n
     */
    protected array $facility_id__n;

    /**
     * @var array<string> $facility_id__nic
     */
    protected array $facility_id__nic;

    /**
     * @var array<string> $facility_id__nie
     */
    protected array $facility_id__nie;

    /**
     * @var array<string> $facility_id__niew
     */
    protected array $facility_id__niew;

    /**
     * @var array<string> $facility_id__nisw
     */
    protected array $facility_id__nisw;

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

    /**
     * @var array<int> $max_weight
     */
    protected array $max_weight;
    protected bool $max_weight__empty;

    /**
     * @var array<int> $max_weight__gt
     */
    protected array $max_weight__gt;

    /**
     * @var array<int> $max_weight__gte
     */
    protected array $max_weight__gte;

    /**
     * @var array<int> $max_weight__lt
     */
    protected array $max_weight__lt;

    /**
     * @var array<int> $max_weight__lte
     */
    protected array $max_weight__lte;

    /**
     * @var array<int> $max_weight__n
     */
    protected array $max_weight__n;
    protected string $modified_by_request;

    /**
     * @var array<int> $mounting_depth
     */
    protected array $mounting_depth;
    protected bool $mounting_depth__empty;

    /**
     * @var array<int> $mounting_depth__gt
     */
    protected array $mounting_depth__gt;

    /**
     * @var array<int> $mounting_depth__gte
     */
    protected array $mounting_depth__gte;

    /**
     * @var array<int> $mounting_depth__lt
     */
    protected array $mounting_depth__lt;

    /**
     * @var array<int> $mounting_depth__lte
     */
    protected array $mounting_depth__lte;

    /**
     * @var array<int> $mounting_depth__n
     */
    protected array $mounting_depth__n;

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
    protected int $offset;
    protected string $ordering;

    /**
     * @var array<int> $outer_depth
     */
    protected array $outer_depth;
    protected bool $outer_depth__empty;

    /**
     * @var array<int> $outer_depth__gt
     */
    protected array $outer_depth__gt;

    /**
     * @var array<int> $outer_depth__gte
     */
    protected array $outer_depth__gte;

    /**
     * @var array<int> $outer_depth__lt
     */
    protected array $outer_depth__lt;

    /**
     * @var array<int> $outer_depth__lte
     */
    protected array $outer_depth__lte;

    /**
     * @var array<int> $outer_depth__n
     */
    protected array $outer_depth__n;
    protected string $outer_unit;
    protected string $outer_unit__n;

    /**
     * @var array<int> $outer_width
     */
    protected array $outer_width;
    protected bool $outer_width__empty;

    /**
     * @var array<int> $outer_width__gt
     */
    protected array $outer_width__gt;

    /**
     * @var array<int> $outer_width__gte
     */
    protected array $outer_width__gte;

    /**
     * @var array<int> $outer_width__lt
     */
    protected array $outer_width__lt;

    /**
     * @var array<int> $outer_width__lte
     */
    protected array $outer_width__lte;

    /**
     * @var array<int> $outer_width__n
     */
    protected array $outer_width__n;
    protected string $q;

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
     * @var array<string> $role
     */
    protected array $role;

    /**
     * @var array<string> $role__n
     */
    protected array $role__n;

    /**
     * @var array<int> $role_id
     */
    protected array $role_id;

    /**
     * @var array<int> $role_id__n
     */
    protected array $role_id__n;

    /**
     * @var array<string>
     */
    protected array $serial;

    protected bool $serial__empty;

    /**
     * @var array<string> $serial__ic
     */
    protected array $serial__ic;

    /**
     * @var array<string> $serial__ie
     */
    protected array $serial__ie;

    /**
     * @var array<string> $serial__iew
     */
    protected array $serial__iew;

    /**
     * @var array<string> $serial__isw
     */
    protected array $serial__isw;

    /**
     * @var array<string> $serial__n
     */
    protected array $serial__n;

    /**
     * @var array<string> $serial__nic
     */
    protected array $serial__nic;

    /**
     * @var array<string> $serial__nie
     */
    protected array $serial__nie;

    /**
     * @var array<string> $serial__niew
     */
    protected array $serial__niew;

    /**
     * @var array<string> $serial__nisw
     */
    protected array $serial__nisw;

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
     * @var array<int> $starting_unit
     */
    protected array $starting_unit;
    protected bool $starting_unit__empty;

    /**
     * @var array<int> $starting_unit__gt
     */
    protected array $starting_unit__gt;

    /**
     * @var array<int> $starting_unit__gte
     */
    protected array $starting_unit__gte;

    /**
     * @var array<int> $starting_unit__lt
     */
    protected array $starting_unit__lt;

    /**
     * @var array<int> $starting_unit__lte
     */
    protected array $starting_unit__lte;

    /**
     * @var array<int> $starting_unit__n
     */
    protected array $starting_unit__n;

    /**
     * @var array<array> $status
     */
    protected array $status;

    /**
     * @var array<array> $status__n
     */
    protected array $status__n;

    /**
     * @var array<array> $tag
     */
    protected array $tag;

    /**
     * @var array<array> $tag__n
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

    /**
     * @var array<int> $u_height
     */
    protected array $u_height;
    protected bool $u_height__empty;

    /**
     * @var array<int> $u_height__gt
     */
    protected array $u_height__gt;

    /**
     * @var array<int> $u_height__gte
     */
    protected array $u_height__gte;

    /**
     * @var array<int> $u_height__lt
     */
    protected array $u_height__lt;

    /**
     * @var array<int> $u_height__lte
     */
    protected array $u_height__lte;

    /**
     * @var array<int> $u_height__n
     */
    protected array $u_height__n;
    protected string $updated_by_request;

    /**
     * @var array<int|float> $weight
     */
    protected array $weight;
    protected bool $weight__empty;

    /**
     * @var array<int|float> $weight__gt
     */
    protected array $weight__gt;

    /**
     * @var array<int|float> $weight__gte
     */
    protected array $weight__gte;

    /**
     * @var array<int|float> $weight__lt
     */
    protected array $weight__lt;

    /**
     * @var array<int|float> $weight__lte
     */
    protected array $weight__lte;

    /**
     * @var array<int|float> $weight__n
     */
    protected array $weight__n;
    protected string $weight_unit;
    protected string $weight_unit__n;

    /**
     * @var array<int> $width
     */
    protected array $width;

    /**
     * @var array<int> $width__n
     */
    protected array $width__n;
}