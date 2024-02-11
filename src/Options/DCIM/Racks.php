<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class Racks
{
    public int    $site;
    public ?int   $location;
    public ?int   $tenant;
    public ?int   $role;
    public int    $width;
    public int    $u_height;
    public ?int   $outer_width;
    public ?int   $outer_depth;

    public string  $name;
    public ?string $facility_id;
    public string  $status;
    public string  $serial;
    public ?string $asset_tag;
    public string  $type;
    public string  $outer_unit;
    public string  $comments;

    public bool    $desc_units;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}