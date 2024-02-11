<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class RearPortTemplates
{
    public ?int   $device_type;
    public int    $positions;

    public string $name;
    public string $label;
    public string $type;
    public string $color;
    public string $description;
}