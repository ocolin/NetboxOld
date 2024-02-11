<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Asns
{
    public int    $rir;
    public int    $asn;
    public ?int   $tenant;

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