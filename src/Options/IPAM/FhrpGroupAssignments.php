<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class FhrpGroupAssignments
{
    public int    $group;
    public int    $interface_id;
    public int    $priority;

    public string $interface_type;
}