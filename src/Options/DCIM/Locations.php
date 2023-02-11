<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Locations
{
    public int    $site;
    public int    $parent;
    public int    $tenant;

    public string $name;
    public string $slug;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}