<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Vlans
{
    public int    $site;
    public int    $group;
    public int    $vid;
    public int    $tenant;
    public int    $role;
    
    public string $name;
    public string $status;
    public string $description;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}