<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class DeviceBayTemplates
{
    public int    $device_type;
    public string $name;
    public string $label;
    public string $description;
}