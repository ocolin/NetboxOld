<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Circuits;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Circuits extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $cid
     */
    protected string|array $cid;
    protected bool $cid__empty;

    /**
     * @var string|array<string> $cid__ic
     */
    protected string|array $cid__ic;

    /**
     * @var string|array<string> $cid__ie
     */
    protected string|array $cid__ie;

    /**
     * @var string|array<string> $cid__iew
     */
    protected string|array $cid__iew;

    /**
     * @var string|array<string> $cid__isw
     */
    protected string|array $cid__isw;

    /**
     * @var string|array<string> $cid__n
     */
    protected string|array $cid__n;

    /**
     * @var string|array<string> $cid__nic
     */
    protected string|array $cid__nic;

    /**
     * @var string|array<string> $cid__nie
     */
    protected string|array $cid__nie;

    /**
     * @var string|array<string> $cid__niew
     */
    protected string|array $cid__niew;

    /**
     * @var string|array<string> $cid__nisw
     */
    protected string|array $cid__nisw;

    /**
     * @var int|array<int> $commit_rate
     */
    protected int|array $commit_rate;
    protected bool $commit_rate__empty;

    /**
     * @var int|array<int> $commit_rate__gt
     */
    protected int|array $commit_rate__gt;

    /**
     * @var int|array<int> $commit_rate__gte
     */
    protected int|array $commit_rate__gte;

    /**
     * @var int|array<int> $commit_rate__lt
     */
    protected int|array $commit_rate__lt;

    /**
     * @var int|array<int> $commit_rate__lte
     */
    protected int|array $commit_rate__lte;

    /**
     * @var int|array<int> $commit_rate__n
     */
    protected int|array $commit_rate__n;

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
     * @var string|array<string> $install_date
     */
    protected string|array $install_date;
    protected bool $install_date__empty;

    /**
     * @var string|array<string> $install_date__gt
     */
    protected string|array $install_date__gt;

    /**
     * @var string|array<string> $install_date__gte
     */
    protected string|array $install_date__gte;

    /**
     * @var string|array<string> $install_date__lt
     */
    protected string|array $install_date__lt;

    /**
     * @var string|array<string> $install_date__lte
     */
    protected string|array $install_date__lte;

    /**
     * @var string|array<string> $install_date__n
     */
    protected string|array $install_date__n;

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
    protected int $offset;
    protected string $ordering;

    /**
     * @var string|array<string> $provider
     */
    protected string|array $provider;

    /**
     * @var string|array<string> $provider__n
     */
    protected string|array $provider__n;

    /**
     * @var int|array<int> $provider_account_id
     */
    protected int|array $provider_account_id;

    /**
     * @var int|array<int> $provider_account_id__n
     */
    protected int|array $provider_account_id__n;

    /**
     * @var int|array<int> $provider_id
     */
    protected int|array $provider_id;

    /**
     * @var int|array<int> $provider_id__n
     */
    protected int|array $provider_id__n;

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

    /**
     * @var string|array<string> $termination_date
     */
    protected string|array $termination_date;
    protected bool $termination_date__empty;

    /**
     * @var string|array<string> $termination_date__gt
     */
    protected string|array $termination_date__gt;

    /**
     * @var string|array<string> $termination_date__gte
     */
    protected string|array $termination_date__gte;

    /**
     * @var string|array<string> $termination_date__lt
     */
    protected string|array $termination_date__lt;

    /**
     * @var string|array<string> $termination_date__lte
     */
    protected string|array $termination_date__lte;

    /**
     * @var string|array<string> $termination_date__n
     */
    protected string|array $termination_date__n;

    /**
     * @var string|array<string> $type
     */
    protected string|array $type;

    /**
     * @var string|array<string> $type__n
     */
    protected string|array $type__n;

    /**
     * @var int|array<int> $type_id
     */
    protected int|array $type_id;

    /**
     * @var int|array<int> $type_id__n
     */
    protected int|array $type_id__n;
    protected string $updated_by_request;
}
