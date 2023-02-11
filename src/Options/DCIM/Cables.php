<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Cables
{
    public int    $termination_a_id;
    public int    $termination_b_id;
    public int    $tenant;
    public array  $tags;
    public array  $custom_fields;
    public float  $length;
    public string $termination_a_type;
    public string $termination_b_type;
    public string $type;
    public string $status;
    public string $label;
    public string $color;
    public string $length_unit;
}