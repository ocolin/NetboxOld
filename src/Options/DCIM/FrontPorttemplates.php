<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class FrontPortTemplates
{
    public ?int   $device_type;
    public int    $rear_port;
    public int    $rear_port_position;

    public string $name;
    public string $label;
    public string $type;
    public string $color;
    public string $description;
}