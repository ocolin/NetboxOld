<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Devices
{
    public int    $device_type;
    public int    $device_role;
    public ?int   $tenant;
    public ?int   $platform;
    public int    $site;
    public ?int   $location;
    public int    $rack;
    public ?int   $position;
    public ?int   $primary_ip4;
    public ?int   $primary_ip6;
    public int    $cluster;
    public ?int   $virtual_chassis;
    public ?int   $vc_position;
    public ?int   $vc_priority;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;

    public ?string $name;
    public string  $serial;
    public ?string $asset_tag;
    public string  $face;
    public string  $status;
    public string  $airflow;
    public string  $comments;
    public string  $local_context_data;

    public object  $parent_device;
}