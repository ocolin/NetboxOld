<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class IpRanges
{
    public ?int   $vrf;
    public ?int   $tenant;
    public ?int   $role;

    public string $start_address;
    public string $end_address;
    public string $status;

    public string $description;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}