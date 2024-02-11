<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerOutlets
{
    public int    $device;
    public ?int   $module;
    public ?int   $power_port;

    public string $name;
    public string $label;
    public string $type;
    public string $feed_leg;
    public string $description;

    public bool   $mark_connected;

    public object $cable;

    /**
     * @var array<string>
     */
    
    public array $tags;

    /**
     * @var array<string>
     */
    
    public array $custom_fields;
}