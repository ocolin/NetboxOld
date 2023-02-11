<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Sites
{
    public ?int   $parent;
    public int    $region;
    public int    $group;
    public int    $tenant;

    public string $name;
    public string $slug;
    public string $status;
    public string $facility;
    public string $time_zone;
    public string $description;
    public string $physical_address;
    public string $shipping_address;
    public string $comments;

    public float  $latitude;
    public float  $longitude;

    public array  $asns;
    public array  $tags;
    public array  $custom_fields;
}