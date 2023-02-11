<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Virtualization;

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

    public array  $tagged_vlans;
    public array  $tags;
    public array  $custom_fields;
}