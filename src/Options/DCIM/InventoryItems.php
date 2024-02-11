<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class InventoryItems
{
    public int    $device;
    public ?int   $parent;
    public ?int   $role;
    public int    $manufacturer;
    public ?int   $component_id;

    public string  $name;
    public string  $label;
    public string  $part_id;
    public string  $serial;
    public ?string $asset_tag;
    public string  $description;
    public ?string $component_type;

    public bool   $discovered;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}