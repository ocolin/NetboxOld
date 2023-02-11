<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Wireless;

#[\AllowDynamicProperties]
class WirelessLans
{
    public int    $group;
    public int    $vlan;

    public string $ssid;
    public string $auth_type;
    public string $description;
    public string $auth_cipher;
    public string $auth_psk;

    public array  $tags;
    public array  $custom_fields;
}