<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class DeviceTypes
{
    public int    $manufacturer;
    public int    $u_height;

    public bool   $is_full_depth;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;

    public string $model;
    public string $slug;
    public string $part_number;
    public string $subdevice_role;
    public string $airflow;
    public string $comments;
}