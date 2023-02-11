<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class RouteTargets
{
    public int    $tenant;
    
    public string $name;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}