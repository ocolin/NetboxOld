<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Props\DCIM;

use \Cruzio\lib\Netbox\Props\Props_Core;
use \Cruzio\lib\Netbox\Props\PropsInterface;

class Sites extends Props_Core implements PropsInterface
{
    /**
     * @var array<int> $asn
     */
    protected array $asn;

    /**
     * @var array<int> $asn__n
     */
    protected array $asn__n;

    /**
     * @var array<int> $asn_id
     */
    protected array $asn_id;

    /**
     * @var array<int> $asn_id__n
     */
    protected array $asn_id__n;

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
     * @var array<string> $facility
     */
    protected array $facility;
    protected bool $facility__empty;

    /**
     * @var array<string> $facility__ic
     */
    protected array $facility__ic;

    /**
     * @var array<string> $facility__ie
     */
    protected array $facility__ie;

    /**
     * @var array<string> $facility__iew
     */
    protected array $facility__iew;

    /**
     * @var array<string> $facility__isw
     */
    protected array $facility__isw;

    /**
     * @var array<string> $facility__n
     */
    protected array $facility__n;

    /**
     * @var array<string> $facility__nic
     */
    protected array $facility__nic;

    /**
     * @var array<string> $facility__nie
     */
    protected array $facility__nie;

    /**
     * @var array<string> $facility__niew
     */
    protected array $facility__niew;

    /**
     * @var array<string> $facility__nisw
     */
    protected array $facility__nisw;

    /**
     * @var array<int> $group
     */
    protected array $group;

    /**
     * @var array<int> $group__n
     */
    protected array $group__n;

    /**
     * @var array<int> $group_id
     */
    protected array $group_id;

    /**
     * @var array<int> $group_id__n
     */
    protected array $group_id__n;

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

    /**
     * @var array<string> $last_updated__empty
     */
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

    /**
     * @var array<float|int> $latitude
     */
    protected array $latitude;
    protected bool $latitude__empty;

    /**
     * @var array<float|int> $latitude__gt
     */
    protected array $latitude__gt;

    /**
     * @var array<float|int> $latitude__gte
     */
    protected array $latitude__gte;

    /**
     * @var array<float|int> $latitude__lt
     */
    protected array $latitude__lt;

    /**
     * @var array<float|int> $latitude__lte
     */
    protected array $latitude__lte;

    /**
     * @var array<float|int> $latitude__n
     */
    protected array $latitude__n;
    protected int $limit;

    /**
     * @var array<float|int> $longitude
     */
    protected array $longitude;
    protected bool $longitude__empty;

    /**
     * @var array<float|int> $longitude__gt
     */
    protected array $longitude__gt;

    /**
     * @var array<float|int> $longitude__gte
     */
    protected array $longitude__gte;

    /**
     * @var array<float|int> $longitude__lt
     */
    protected array $longitude__lt;

    /**
     * @var array<float|int> $longitude__lte
     */
    protected array $longitude__lte;

    /**
     * @var array<float|int> $longitude__n
     */
    protected array $longitude__n;
    protected string $modified_by_request;

    /**
     * @var array<string> $name
     */
    protected array $name;
    protected bool $name__empty;

    /**
     * @var array<string> $name__ic
     */
    protected string $name__ic;

    /**
     * @var array<string> $name__ie
     */
    protected string $name__ie;

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
     * @var array<string> $slug
     */
    protected array $slug;
    protected bool $slug__empty;

    /**
     * @var array<string> $slug__ic
     */
    protected array $slug__ic;

    /**
     * @var array<string> $slug__ie
     */
    protected array $slug__ie;

    /**
     * @var array<string> $slug__iew
     */
    protected array $slug__iew;

    /**
     * @var array<string> $slug__isw
     */
    protected array $slug__isw;

    /**
     * @var array<string> $slug__n
     */
    protected array $slug__n;

    /**
     * @var array<string> $slug__nic
     */
    protected array $slug__nic;

    /**
     * @var array<string> $slug__nie
     */
    protected array $slug__nie;

    /**
     * @var array<string> $slug__niew
     */
    protected array $slug__niew;

    /**
     * @var array<string> $slug__nisw
     */
    protected array $slug__nisw;

    /**
     * @var array<string> $status
     */
    protected array $status;

    /**
     * @var array<string> $status__n
     */
    protected array $status__n;

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
}