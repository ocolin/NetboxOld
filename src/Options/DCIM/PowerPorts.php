<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerPorts
{
    public int    $device;
    public int    $module;
    public int    $maximum_draw;
    public int    $allocated_draw;

    public string $name;
    public string $label;
    public string $type;
    public string $description;

    public bool   $mark_connected;
    public object $cable;

    public array $tags;
    public array $custom_fields;
}