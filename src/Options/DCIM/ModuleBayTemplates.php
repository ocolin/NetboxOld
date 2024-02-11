<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class ModuleBayTemplates
{
    public int    $device_type;

    public string $name;
    public string $label;
    public string $position;
    public string $description;
}