<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class ConfigContexts
{
    public int    $weight;

    public string $name;
    public string $description;

    public bool   $is_active;

    /**
     * @var array<string, mixed>
     */
    
    public array  $data;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $regions;

    /**
     * @var array<string>
     */
    
    public array  $site_groups;

    /**
     * @var array<string>
     */
    
    public array  $sites;

    /**
     * @var array<string>
     */
    
    public array  $device_types;

    /**
     * @var array<string>
     */
    
    public array  $roles;

    /**
     * @var array<string>
     */
    
    public array  $platforms;

    /**
     * @var array<string>
     */
    
    public array  $cluster_types;

    /**
     * @var array<string>
     */
    
    public array  $cluster_groups;

    /**
     * @var array<string>
     */
    
    public array  $clusters;

    /**
     * @var array<string>
     */
    
    public array  $tenant_groups;

    /**
     * @var array<string>
     */
    
    public array  $tenants;
}