<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Racks extends Params_Core implements ParamsInterface
{

    /**
     * @var string|array<string> $asset_tag
     */
    protected string|array $asset_tag;
    protected bool $asset_tag__empty;

    /**
     * @var string|array<string> $asset_tag__ic
     */
    protected string|array $asset_tag__ic;

    /**
     * @var string|array<string> $asset_tag__ie
     */
    protected string|array $asset_tag__ie;

    /**
     * @var string|array<string> $asset_tag__iew
     */
    protected string|array $asset_tag__iew;

    /**
     * @var string|array<string> $asset_tag__isw
     */
    protected string|array $asset_tag__isw;

    /**
     * @var string|array<string> $asset_tag__n
     */
    protected string|array $asset_tag__n;

    /**
     * @var string|array<string> $asset_tag__nic
     */
    protected string|array $asset_tag__nic;

    /**
     * @var string|array<string> $asset_tag__nie
     */
    protected string|array $asset_tag__nie;

    /**
     * @var string|array<string> $asset_tag__niew
     */
    protected string|array $asset_tag__niew;

    /**
     * @var string|array<string> $asset_tag__nisw
     */
    protected string|array $asset_tag__nisw;

    /**
     * @var int|array<int> $contact
     */
    protected int|array $contact;

    /**
     * @var int|array<int> $contact__n
     */
    protected int|array $contact__n;

    /**
     * @var int|array<int> $contact_group
     */
    protected int|array $contact_group;

    /**
     * @var int|array<int> $contact_group__n
     */
    protected int|array $contact_group__n;

    /**
     * @var int|array<int> $contact_role
     */
    protected int|array $contact_role;

    /**
     * @var int|array<int> $contact_role__n
     */
    protected int|array $contact_role__n;

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
     * @var string|array<string> $facility_id
     */
    protected string|array $facility_id;
    protected bool $facility_id__empty;

    /**
     * @var string|array<string> $facility_id__ic
     */
    protected string|array $facility_id__ic;

    /**
     * @var string|array<string> $facility_id__ie
     */
    protected string|array $facility_id__ie;

    /**
     * @var string|array<string> $facility_id__iew
     */
    protected string|array $facility_id__iew;

    /**
     * @var string|array<string> $facility_id__isw
     */
    protected string|array $facility_id__isw;

    /**
     * @var string|array<string> $facility_id__n
     */
    protected string|array $facility_id__n;

    /**
     * @var string|array<string> $facility_id__nic
     */
    protected string|array $facility_id__nic;

    /**
     * @var string|array<string> $facility_id__nie
     */
    protected string|array $facility_id__nie;

    /**
     * @var string|array<string> $facility_id__niew
     */
    protected string|array $facility_id__niew;

    /**
     * @var string|array<string> $facility_id__nisw
     */
    protected string|array $facility_id__nisw;

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
     * @var int|array<int> $location Slug
     */
    protected int|array $location;

    /**
     * @var int|array<int> $location__n Slug
     */
    protected int|array $location__n;

    /**
     * @var int|array<int> $location_id
     */
    protected int|array $location_id;

    /**
     * @var int|array<int> $location_id__n
     */
    protected int|array $location_id__n;

    /**
     * @var int|array<int> $max_weight
     */
    protected int|array $max_weight;
    protected bool $max_weight__empty;

    /**
     * @var int|array<int> $max_weight__gt
     */
    protected int|array $max_weight__gt;

    /**
     * @var int|array<int> $max_weight__gte
     */
    protected int|array $max_weight__gte;

    /**
     * @var int|array<int> $max_weight__lt
     */
    protected int|array $max_weight__lt;

    /**
     * @var int|array<int> $max_weight__lte
     */
    protected int|array $max_weight__lte;

    /**
     * @var int|array<int> $max_weight__n
     */
    protected int|array $max_weight__n;
    protected string $modified_by_request;

    /**
     * @var int|array<int> $mounting_depth
     */
    protected int|array $mounting_depth;
    protected bool $mounting_depth__empty;

    /**
     * @var int|array<int> $mounting_depth__gt
     */
    protected int|array $mounting_depth__gt;

    /**
     * @var int|array<int> $mounting_depth__gte
     */
    protected int|array $mounting_depth__gte;

    /**
     * @var int|array<int> $mounting_depth__lt
     */
    protected int|array $mounting_depth__lt;

    /**
     * @var int|array<int> $mounting_depth__lte
     */
    protected int|array $mounting_depth__lte;

    /**
     * @var int|array<int> $mounting_depth__n
     */
    protected int|array $mounting_depth__n;

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
     * @var int|array<int> $outer_depth
     */
    protected int|array $outer_depth;
    protected bool $outer_depth__empty;

    /**
     * @var int|array<int> $outer_depth__gt
     */
    protected int|array $outer_depth__gt;

    /**
     * @var int|array<int> $outer_depth__gte
     */
    protected int|array $outer_depth__gte;

    /**
     * @var int|array<int> $outer_depth__lt
     */
    protected int|array $outer_depth__lt;

    /**
     * @var int|array<int> $outer_depth__lte
     */
    protected int|array $outer_depth__lte;

    /**
     * @var int|array<int> $outer_depth__n
     */
    protected int|array $outer_depth__n;
    protected string $outer_unit;
    protected string $outer_unit__n;

    /**
     * @var int|array<int> $outer_width
     */
    protected int|array $outer_width;
    protected bool $outer_width__empty;

    /**
     * @var int|array<int> $outer_width__gt
     */
    protected int|array $outer_width__gt;

    /**
     * @var int|array<int> $outer_width__gte
     */
    protected int|array $outer_width__gte;

    /**
     * @var int|array<int> $outer_width__lt
     */
    protected int|array $outer_width__lt;

    /**
     * @var int|array<int> $outer_width__lte
     */
    protected int|array $outer_width__lte;

    /**
     * @var int|array<int> $outer_width__n
     */
    protected int|array $outer_width__n;
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
     * @var int|array<int> $role_id
     */
    protected int|array $role_id;

    /**
     * @var int|array<int> $role_id__n
     */
    protected int|array $role_id__n;

    /**
     * @var string|array<string>
     */
    protected string|array $serial;

    protected bool $serial__empty;

    /**
     * @var string|array<string> $serial__ic
     */
    protected string|array $serial__ic;

    /**
     * @var string|array<string> $serial__ie
     */
    protected string|array $serial__ie;

    /**
     * @var string|array<string> $serial__iew
     */
    protected string|array $serial__iew;

    /**
     * @var string|array<string> $serial__isw
     */
    protected string|array $serial__isw;

    /**
     * @var string|array<string> $serial__n
     */
    protected string|array $serial__n;

    /**
     * @var string|array<string> $serial__nic
     */
    protected string|array $serial__nic;

    /**
     * @var string|array<string> $serial__nie
     */
    protected string|array $serial__nie;

    /**
     * @var string|array<string> $serial__niew
     */
    protected string|array $serial__niew;

    /**
     * @var string|array<string> $serial__nisw
     */
    protected string|array $serial__nisw;

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
     * @var int|array<int> $starting_unit
     */
    protected int|array $starting_unit;
    protected bool $starting_unit__empty;

    /**
     * @var int|array<int> $starting_unit__gt
     */
    protected int|array $starting_unit__gt;

    /**
     * @var int|array<int> $starting_unit__gte
     */
    protected int|array $starting_unit__gte;

    /**
     * @var int|array<int> $starting_unit__lt
     */
    protected int|array $starting_unit__lt;

    /**
     * @var int|array<int> $starting_unit__lte
     */
    protected int|array $starting_unit__lte;

    /**
     * @var int|array<int> $starting_unit__n
     */
    protected int|array $starting_unit__n;

    /**
     * @var array<string> $status
     */
    protected string|array $status;

    /**
     * @var array<string> $status__n
     */
    protected string|array $status__n;

    /**
     * @var array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var array<string> $tag__n
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

    /**
     * @var int|array<int> $u_height
     */
    protected int|array $u_height;
    protected bool $u_height__empty;

    /**
     * @var int|array<int> $u_height__gt
     */
    protected int|array $u_height__gt;

    /**
     * @var int|array<int> $u_height__gte
     */
    protected int|array $u_height__gte;

    /**
     * @var int|array<int> $u_height__lt
     */
    protected int|array $u_height__lt;

    /**
     * @var int|array<int> $u_height__lte
     */
    protected int|array $u_height__lte;

    /**
     * @var int|array<int> $u_height__n
     */
    protected int|array $u_height__n;
    protected string $updated_by_request;

    /**
     * @var int|float|array<int|float> $weight
     * @var int|float|array<int|float> $weight
     */
    protected int|float|array $weight;
    protected bool $weight__empty;

    /**
     * @var int|float|array<int|float> $weight__gt
     */
    protected int|float|array $weight__gt;

    /**
     * @var int|float|array<int|float> $weight__gte
     */
    protected int|float|array $weight__gte;

    /**
     * @var int|float|array<int|float> $weight__lt
     */
    protected int|float|array $weight__lt;

    /**
     * @var int|float|array<int|float> $weight__lte
     */
    protected int|float|array $weight__lte;

    /**
     * @var int|float|array<int|float> $weight__n
     */
    protected int|float|array $weight__n;
    protected string $weight_unit;
    protected string $weight_unit__n;

    /**
     * @var int|array<int> $width
     */
    protected int|array $width;

    /**
     * @var int|array<int> $width__n
     */
    protected int|array $width__n;
}