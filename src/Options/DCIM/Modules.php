<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Modules
{
    public int    $device;
    public int    $module_bay;
    public int    $module_type;

    public string $serial;
    public string $asset_tag;
    public string $comments;

    public array  $tags;
    public array  $custom_fields;
}