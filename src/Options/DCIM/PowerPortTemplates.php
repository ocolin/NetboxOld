<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerPortTemplates
{
    public int    $device_type;
    public int    $maximum_draw;
    public int    $allocated_draw;

    public string $name;
    public string $label;
    public string $type;
    public string $description;
}