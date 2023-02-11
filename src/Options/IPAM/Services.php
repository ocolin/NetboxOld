<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Services
{
    public int    $device;
    public int    $virtual_machine;
    
    public string $name;
    public string $description;
    public string $protocol;

    public array  $ports;
    public array  $ipaddresses;
    public array  $tags;
    public array  $custom_fields;
}