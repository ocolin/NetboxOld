<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Wireless;

#[\AllowDynamicProperties]
class WirelessLinks
{
    public int    $interface_a;
    public int    $interface_b;

    public string $ssid;
    public string $status;
    public string $description;
    public string $auth_type;
    public string $auth_cipher;
    public string $auth_psk;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}