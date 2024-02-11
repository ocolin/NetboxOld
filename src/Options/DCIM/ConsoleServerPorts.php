<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class ConsoleServerPorts
{
    public int    $device;
    public ?int   $module;
    public ?int   $speed;
    public bool   $mark_connected;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;

    public string $name;
    public string $label;
    public string $type;
    public string $description;
    public object $cable;
}