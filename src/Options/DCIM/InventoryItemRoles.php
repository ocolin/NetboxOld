<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class InventoryItemRoles
{
    public string $name;
    public string $slug;
    public string $color;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}