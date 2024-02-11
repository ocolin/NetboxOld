<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerOutletTemplates
{
    public ?int   $device_type;
    public ?int   $power_port;

    public string $name;
    public string $label;
    public string $type;
    public string $feed_leg;
    public string $description;
}