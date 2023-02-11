<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class DeviceBays
{
    public int    $device;
    public int    $installed_device;

    public array  $tags;
    public array  $custom_fields;
    
    public string $name;
    public string $label;
    public string $description;
}