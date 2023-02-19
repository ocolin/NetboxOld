<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class ConfigContexts
{
    public int    $weight;

    public string $name;
    public string $description;

    public bool   $is_active;

    public array  $data;
    public array  $tags;
    public array  $regions;
    public array  $site_groups;
    public array  $sites;
    public array  $device_types;
    public array  $roles;
    public array  $platforms;
    public array  $cluster_types;
    public array  $cluster_groups;
    public array  $clusters;
    public array  $tenant_groups;
    public array  $tenants;
}