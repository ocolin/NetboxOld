<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Vrfs
{
    public int    $tenant;
    public int    $group;
    public int    $vid;
    
    public string $name;
    public string $rd;
    public string $description;

    public bool   $enforce_unique;

    /**
     * @var array<string>
     */
    
    public array  $import_targets;

    /**
     * @var array<string>
     */
    
    public array  $export_targets;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}