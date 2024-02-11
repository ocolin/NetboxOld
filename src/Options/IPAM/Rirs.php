<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Rirs
{
    public string $name;
    public string $slug;
    public string $description;

    public bool   $is_private;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}