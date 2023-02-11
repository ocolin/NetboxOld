<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Wireless;

#[\AllowDynamicProperties]
class WirelessLanGroups
{
    public int    $parent;

    public string $name;
    public string $slug;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}