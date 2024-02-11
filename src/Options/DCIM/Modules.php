<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Modules
{
    public int    $device;
    public int    $module_bay;
    public int    $module_type;

    public string  $serial;
    public ?string $asset_tag;
    public string  $comments;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}