<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class IpRanges
{
    public int    $vrf;
    public int    $tenant;
    public int    $role;

    public string $start_address;
    public string $end_address;
    public string $status;

    public string $description;

    public array  $tags;
    public array  $custom_fields;
}