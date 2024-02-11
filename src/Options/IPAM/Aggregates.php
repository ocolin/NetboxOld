<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Aggregates
{
    public int    $rir;
    public ?int   $tenant;

    public string  $prefix;
    public ?string $date_added;
    public string  $description;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}