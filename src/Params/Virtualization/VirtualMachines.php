<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Virtualization;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class VirtualMachines extends Params_Core implements ParamsInterface
{

    /**
     * @var int|array<int> $cluster
     */
    protected int|array $cluster;

    /**
     * @var int|array<int> $cluster__n
     */
    protected int|array $cluster__n;

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
     * @var int|array<int> $cluster_type_id__n
     */
    protected int|array $cluster_type_id__n;

    /**
     * @var int|array<int> $config_template_id
     */
    protected int|array $config_template_id;

    /**
     * @var int|array<int> $config_template_id__n
     */
    protected int|array $config_template_id__n;
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
     * @var string|array<string> $device
     */
    protected string|array $device;

    /**
     * @var string|array<string> $device__n
     */
    protected string|array $device__n;

    /**
     * @var int|array<int> $device_id
     */
    protected int|array $device_id;

    /**
     * @var int|array<int> $device_id__n
     */
    protected int|array $device_id__n;

    /**
     * @var int|array<int> $disk
     */
    protected int|array $disk;
    protected bool $disk__empty;

    /**
     * @var int|array<int> $disk__gt
     */
    protected int|array $disk__gt;

    /**
     * @var int|array<int> $disk__gte
     */
    protected int|array $disk__gte;

    /**
     * @var int|array<int> $disk__lt
     */
    protected int|array $disk__lt;

    /**
     * @var int|array<int> $disk__lte
     */
    protected int|array $disk__lte;

    /**
     * @var int|array<int> $disk__n
     */
    protected int|array $disk__n;
    protected bool $has_primary_ip;

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
    protected bool $local_context_data;

    /**
     * @var string|array<string> $mac_address
     */
    protected string|array $mac_address;

    /**
     * @var string|array<string> $mac_address__ic
     */
    protected string|array $mac_address__ic;

    /**
     * @var string|array<string> $mac_address__ie
     */
    protected string|array $mac_address__ie;

    /**
     * @var string|array<string> $mac_address__iew
     */
    protected string|array $mac_address__iew;

    /**
     * @var string|array<string> $mac_address__isw
     */
    protected string|array $mac_address__isw;

    /**
     * @var string|array<string> $mac_address__n
     */
    protected string|array $mac_address__n;

    /**
     * @var string|array<string> $mac_address__nic
     */
    protected string|array $mac_address__nic;

    /**
     * @var string|array<string> $mac_address__nie
     */
    protected string|array $mac_address__nie;

    /**
     * @var string|array<string> $mac_address__niew
     */
    protected string|array $mac_address__niew;

    /**
     * @var string|array<string> $mac_address__nisw
     */
    protected string|array $mac_address__nisw;

    /**
     * @var int|array<int> $memory
     */
    protected int|array $memory;
    protected bool $memory__empty;

    /**
     * @var int|array<int> $memory__gt
     */
    protected int|array $memory__gt;

    /**
     * @var int|array<int> $memory__gte
     */
    protected int|array $memory__gte;

    /**
     * @var int|array<int> $memory__lt
     */
    protected int|array $memory__lt;

    /**
     * @var int|array<int> $memory__lte
     */
    protected int|array $memory__lte;

    /**
     * @var int|array<int> $memory__n
     */
    protected int|array $memory__n;

    protected string $modified_by_request; // UUID

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
     * @var int|array<int> $primary_ip4_id
     */
    protected int|array $primary_ip4_id;

    /**
     * @var int|array<int> $primary_ip4_id__n
     */
    protected int|array $primary_ip4_id__n;

    /**
     * @var int|array<int> $primary_ip6_id
     */
    protected int|array $primary_ip6_id;

    /**
     * @var int|array<int> $primary_ip6_id__n
     */
    protected int|array $primary_ip6_id__n;

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
    protected string $updated_by_request; // UUID

    /**
     * @var int|float|array<int|float> $vcpus
     */
    protected int|float|array $vcpus;
    protected bool $vcpus__empty;

    /**
     * @var int|float|array<int|float> $vcpus__gt
     */
    protected int|float|array $vcpus__gt;

    /**
     * @var int|float|array<int|float> $vcpus__gte
     */
    protected int|float|array $vcpus__gte;

    /**
     * @var int|float|array<int|float> $vcpus__lt
     */
    protected int|float|array $vcpus__lt;

    /**
     * @var int|float|array<int|float> $vcpus__lte
     */
    protected int|float|array $vcpus__lte;

    /**
     * @var int|float|array<int|float> $vcpus__n
     */
    protected int|float|array $vcpus__n;
}