<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Services
{
    public int    $device;
    public int    $virtual_machine;
    
    public string $name;
    public string $description;
    public string $protocol;

    /**
     * @var array<string>
     */
    
    public array  $ports;

    /**
     * @var array<string>
     */
    
    public array  $ipaddresses;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}