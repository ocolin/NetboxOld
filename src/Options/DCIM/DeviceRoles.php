<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class DeviceRoles
{
    public bool $vm_role;

    public array $tags;
    public array $custom_fields;

    public string $name;
    public string $slug;
    public string $color;
    public string $description;
}