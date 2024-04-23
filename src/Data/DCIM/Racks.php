<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Racks extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $facility_id; // Max: 50
    protected int    $site;    // Class: Site
    protected int    $location;    // Class Location
    protected int    $tenant;  // Class Tenant
    protected string $status;
    protected int    $role;    // Class RackRole
    protected string $serial;   // Serial number
    protected string $asset_tag;    // A unique tag used to identify this rack
    protected string $type;
    protected int    $width;
    protected int    $u_height;    // Height in rack units
    protected int    $starting_unit;   // Starting unit for rack
    protected float  $weight;    
    protected int    $max_weight;  // Maximum load capacity for the rack
    protected string $weight_unit; // Weight unit
    protected bool   $desc_units; // Descending units
    protected int    $outer_width; // Outer dimension of rack (width). max: 32767
    protected int    $outer_depth; // Outer dimension of rack (depth) max: 32767
    protected string $outer_unit;
    protected int    $mounting_depth;  // Maximum depth of a mounted device, in millimeters. For four-post racks, this is the distance between the front and rear rails.
    protected string $description;  // Max: 200
    protected string $comments;

    /**
     *  @var array<TagType> $tags
     */

    protected array  $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int    $device_count;
    protected int    $powerfeed_count;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'site' ];
    }


/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function readonly() : array
    {
        return [
            'id',
            'url',
            'display',
            'created',
            'last_updated',
            'device_count',
            'powerfeed_count'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [ 
            'status'      => ['Status'],
            'type'        => ['RackType'],
            'width'       => ['RackWidth'],
            'weight_unit' => ['WeightUnit'],
            'outer_unit'  => ['RackOuterUnit']
        ];
    }

    use Validation\Status;
    use Validation\RackType;
    use Validation\RackWidth;
    use Validation\WeightUnit;
    use Validation\RackOuterUnit;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "facility_id": "string",
  "site": 0,
  "location": 0,
  "tenant": 0,
  "status": "reserved",
  "role": 0,
  "serial": "string",
  "asset_tag": "string",
  "type": "2-post-frame",
  "width": 10,
  "u_height": 100,
  "starting_unit": 32767,
  "weight": 999999,
  "max_weight": 2147483647,
  "weight_unit": "kg",
  "desc_units": true,
  "outer_width": 32767,
  "outer_depth": 32767,
  "outer_unit": "mm",
  "mounting_depth": 32767,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "0T5frJQUfRxbSWJDSP0KZG7vjoB4pnTxO24L07lq6fbGxVk4k7yqz4Q5HJRvBKsq_SkyuVOm-wRBJyRtFHv9KIdFaK5fx",
      "color": "d82c85"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */