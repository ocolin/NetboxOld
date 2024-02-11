<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class DeviceBays
{
    public int    $device;
    public ?int   $installed_device;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
    
    public string $name;
    public string $label;
    public string $description;
}