<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class RackReservations
{
    public int    $rack;
    public int    $user;
    public ?int   $tenant;

    public string $description;

    /**
     * @var array<string>
     */
    
    public array  $units;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}