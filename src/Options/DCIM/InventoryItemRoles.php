<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class InventoryItemRoles
{
    public string $name;
    public string $slug;
    public string $color;
    public string $description;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}