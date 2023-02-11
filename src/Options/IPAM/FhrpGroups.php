<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class FhrpGroups
{
    public int    $group_id;
    public int    $interface_id;
    public int    $priority;

    public string $protocol;
    public string $auth_type;
    public string $auth_key;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}