<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Platforms
{
    public ?int   $manufacturer;

    public string $name;
    public string $slug;
    public string $napalm_driver;
    public ?string $napalm_args;
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