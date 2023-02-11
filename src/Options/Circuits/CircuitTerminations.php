<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options;

#[\AllowDynamicProperties]
class CircuitTerminations
{
    public int    $circuit          = 0;
    public int    $site             = 0;
    public int    $provider_network = 0;
    public int    $port_speed       = 0;
    public int    $upstream_speed   = 0;
    public bool   $mark_connected   = false;
    public string $term_side        = 'A';
    public string $xconnect_id      = '';
    public string $pp_info          = '';
    public string $description      = '';

    // cable

}