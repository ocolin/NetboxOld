<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class FrontPorts
{
    public int    $device;
    public int    $module;
    public int    $rear_port;
    public int    $rear_port_position;

    public bool   $mark_connected;

    public string $name;
    public string $label;
    public string $type;
    public string $color;
    public string $description;

    public object $cable;

    public array  $tags;
    public array  $custom_fields;
}