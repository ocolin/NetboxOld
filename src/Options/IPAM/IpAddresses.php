<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class IpAddresses
{
    public int    $vrf;
    public int    $tenant;
    public int    $assigned_object_id;
    public int    $nat_inside;

    public string $address;
    public string $status;
    public string $role;
    public string $assigned_object_type;
    public string $dns_name;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}