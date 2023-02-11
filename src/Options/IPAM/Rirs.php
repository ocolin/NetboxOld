<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Rirs
{
    public string $name;
    public string $slug;
    public string $description;

    public bool   $is_private;

    public array  $tags;
    public array  $custom_fields;
}