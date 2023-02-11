<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class InterfaceTemplates
{
    public int    $device_type;

    public string $name;
    public string $label;
    public string $type;
    public string $description;

    public bool   $mgmt_only;
}