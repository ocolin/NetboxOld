<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

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

    public array  $import_targets;
    public array  $export_targets;
    public array  $tags;
    public array  $custom_fields;
}