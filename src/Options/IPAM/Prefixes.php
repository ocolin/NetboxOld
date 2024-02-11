<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Prefixes
{
    public ?int   $vrf;
    public ?int   $tenant;
    public ?int   $site;
    public ?int   $vlan;
    public ?int   $role;

    public string $prefix;
    public string $status;
    public string $description;

    public bool   $is_pool;
    public bool   $mark_utilized;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}