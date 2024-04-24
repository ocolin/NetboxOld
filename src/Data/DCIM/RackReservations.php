<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class RackReservations extends Data_Core implements DataInterface
{
    /**
     * @var int $rack
     * REQUIRED
     * ID of Racks class
     */
    protected int $rack;

    /**
     * @var array<int> $units
     * REQUIRED
     * Array of Unit IDs
     */
    protected array  $units;

    /**
     * @var int $user
     * REQUIRED
     * ID of Users class
     */
    protected int $user;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */
    protected array  $tags;
    protected string $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'rack', 'units', 'user' ];
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
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\PowerPortType;
    use Validation\MaxString;
    use Validation\RangeInt;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "rack": 0,
  "units": [
    32767
  ],
  "user": 0,
  "tenant": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "vbt2CFpI2RMS48X6dNfsGd-xChQ9PqzIcMBEWOLMZjJTXGFIltv7KH8jXen8Bq0saVCNKN0sqygS07zQXt",
      "color": "21cddc"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */