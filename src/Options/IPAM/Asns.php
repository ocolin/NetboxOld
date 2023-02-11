<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class Asns
{
    public int    $rir;
    public int    $asn;
    public int    $tenant;

    public string $description;

    public array  $tags;
    public array  $custom_fields;
}