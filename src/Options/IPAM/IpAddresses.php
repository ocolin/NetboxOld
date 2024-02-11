<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class IpAddresses
{
    public ?int    $vrf;
    public ?int    $tenant;
    public ?int    $assigned_object_id;
    public ?int    $nat_inside;

    public string  $address;
    public string  $status;
    public string  $role;
    public ?string $assigned_object_type;
    public string  $dns_name;
    public string  $description;

    /**
     * @var array<string>
     */
    
    public array   $tags;

    /**
     * @var array<string>
     */
    
    public array   $custom_fields;
}