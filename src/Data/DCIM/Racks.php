<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Racks extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of Rack
     */
    protected string $name;

    /**
     * @var string $facility_id
     * ID of Facility Rack is located in
     */
    protected string $facility_id;

    /**
     * @var int $site
     * REQUIRED
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $location
     * ID of Locations class
     */
    protected int $location;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $status
     * Choose from list of statuses
     */
    protected string $status;

    /**
     * @var int $role
     * ID of RackRoles class
     */
    protected int $role;

    /**
     * @var string $serial
     * Serial number
     */
    protected string $serial;

    /**
     * @var string $asset_tag
     * A unique tag used to identify this rack
     */
    protected string $asset_tag;

    /**
     * @var string $type
     * Choose from list or rack types
     */
    protected string $type;

    /**
     * @var int $width
     * Choose from list of width integers
     */
    protected int $width;

    /**
     * @var int $u_height
     * Height in rack units
     */
    protected int $u_height;

    /**
     * @var int $starting_unit
     * Starting unit for rack
     */
    protected int $starting_unit;

    /**
     * @var float $weight
     * Weight of empty rack
     */
    protected float $weight;

    /**
     * @var int $max_weight
     * Maximum load capacity for the rack
     */
    protected int $max_weight;

    /**
     * @var string $weight_unit
     * Weight unit of measurement
     */
    protected string $weight_unit;

    /**
     * @var bool $desc_units
     * Descending units
     */
    protected bool $desc_units;

    /**
     * @var int $outer_width
     * Outer dimension of rack (width).
     */
    protected int $outer_width;

    /**
     * @var int $outer_depth
     * Outer dimension of rack (depth)
     */
    protected int $outer_depth;

    /**
     * @var string $outer_unit
     * Choose a unit of measurement
     */
    protected string $outer_unit;

    /**
     * @var int $mounting_depth
     * Maximum depth of a mounted device, in millimeters.
     * For four-post racks, this is the distance between
     * the front and rear rails.
     *
     */
    protected int    $mounting_depth;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [ 
            'status'         => [ 'Status' ],
            'type'           => [ 'RackType' ],
            'width'          => [ 'RackWidth' ],
            'weight_unit'    => [ 'WeightUnit' ],
            'outer_unit'     => [ 'RackOuterUnit' ],
            'name'           => [ 'MaxString', 100 ],
            'facility_id'    => [ 'MaxString', 50 ],
            'serial'         => [ 'MaxString', 50 ],
            'asset_tag'      => [ 'MaxString', 50 ],
            'u_height'       => [ 'RangeInt', 1, 100 ],
            'starting_unit'  => [ 'RangeInt', 1, 32767 ],
            'max_weight'     => [ 'RangeInt', 0, 2147483647 ],
            'outer_width'    => [ 'RangeInt', 0, 32767 ],
            'outer_depth'    => [ 'RangeInt', 0, 32767 ],
            'mounting_depth' => [ 'RangeInt', 0, 32767 ],
            'description'    => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Status;
    use Validation\RackType;
    use Validation\RackWidth;
    use Validation\WeightUnit;
    use Validation\RackOuterUnit;
    use Validation\MaxString;
    use Validation\RangeInt;
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