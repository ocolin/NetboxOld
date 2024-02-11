<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerPanels
{
    public int    $site;
    public ?int   $location;

    public string $name;

    /**
     * @var array<string>
     */
    
    public array $tags;

    /**
     * @var array<string>
     */
    
    public array $custom_fields;
}