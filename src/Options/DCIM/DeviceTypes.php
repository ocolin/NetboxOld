<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class DeviceTypes
{
    public int    $manufacturer;
    public int    $u_height;

    public bool   $is_full_depth;

    public array  $tags;
    public array  $custom_fields;

    public string $model;
    public string $slug;
    public string $part_number;
    public string $subdevice_role;
    public string $airflow;
    public string $comments;
}