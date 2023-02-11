<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Prefixes
{
    public int    $vrf;
    public int    $tenant;
    public int    $site;
    public int    $vlan;
    public int    $role;

    public string $prefix;
    public string $status;
    public string $description;

    public bool   $is_pool;
    public bool   $mark_utilized;

    public array  $tags;
    public array  $custom_fields;
}