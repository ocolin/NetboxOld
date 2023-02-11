<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class ModuleBays
{
    public int    $device;

    public string $name;
    public string $label;
    public string $position;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}