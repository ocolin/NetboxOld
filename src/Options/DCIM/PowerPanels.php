<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerPanels
{
    public int    $site;
    public int    $location;

    public string $name;

    public array $tags;
    public array $custom_fields;
}