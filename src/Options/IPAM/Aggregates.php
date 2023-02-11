<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Aggregates
{
    public int    $rir;
    public int    $tenant;

    public string $prefix;
    public string $date_added;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}