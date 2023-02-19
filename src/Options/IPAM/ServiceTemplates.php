<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class ServiceTemplates
{
    public int    $tenant;
    
    public string $name;
    public string $description;
    public string $protocol;

    public array  $tags;
    public array  $ports;
    public array  $custom_fields;
}