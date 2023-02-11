<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Platforms
{
    public int    $manufacturer;

    public string $name;
    public string $slug;
    public string $napalm_driver;
    public string $napalm_args;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}