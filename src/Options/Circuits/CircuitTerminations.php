<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Circuits;

#[\AllowDynamicProperties]
class CircuitTerminations
{
    public int    $circuit;
    public int    $site;
    public int    $provider_network;
    public int    $port_speed;
    public int    $upstream_speed;
    public bool   $mark_connected;
    public string $term_side;
    public string $xconnect_id;
    public string $pp_info;
    public string $description;

    // cable

}