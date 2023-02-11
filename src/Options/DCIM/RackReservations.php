<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class RackReservations
{
    public int    $rack;
    public int    $user;
    public int    $tenant;

    public string $description;

    public array  $units;
    public array  $tags;
    public array  $custom_fields;
}