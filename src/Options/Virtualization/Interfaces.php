<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Virtualization;

#[\AllowDynamicProperties]
class Interfaces
{
    public int    $virtual_machine;
    public int    $parent;
    public int    $bridge;
    public int    $mtu;
    public int    $untagged_vlan;
    public int    $vrf;

    public string $name;
    public string $mac_address;
    public string $description;
    public string $mode;

    public bool   $enabled;

    /**
     * @var array<string>
     */
    
    public array  $tagged_vlans;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}