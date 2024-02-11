<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class InventoryItemTemplates
{
    public int    $device_type;
    public ?int   $parent;
    public ?int   $role;
    public ?int   $manufacturer;
    public ?int   $component_id;

    public string  $name;
    public string  $label;
    public string  $part_id;
    public string  $description;
    public ?string $component_type;
}