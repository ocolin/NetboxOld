<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class VirtualChassis
{
    public int    $master;

    public string $name;
    public string $domain;

    public array  $tags;
    public array  $custom_fields;
}