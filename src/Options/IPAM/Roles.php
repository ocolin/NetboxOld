<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Roles
{
    public int    $weight;
    
    public string $name;
    public string $slug;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}