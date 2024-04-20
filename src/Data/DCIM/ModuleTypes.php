<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ModuleTypes extends Data_Core implements DataInterface
{
    protected int    $manufacturer;
    protected string $model; // Max: 100
    protected string $part_number; // Discrete part number (optional). Max 50
    protected float  $weight; 
    protected string $weight_unit;
    protected string $description; // Max: 200
    protected string $comments;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;

    /**
     * @var array<TagType> $tags
     */

    protected array $tags;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'manufacturer', 'model' ];
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
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'weight_unit' => 'WeightUnit' ];
    }

    use Validation\WeightUnit;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "manufacturer": 0,
  "model": "string",
  "part_number": "string",
  "weight": 999999,
  "weight_unit": "kg",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "l32vW-FTRc4t7VnnqIpc8x7ci2-8WRE9WTaeeP49ASVpSks7OUg6rrh8Phbgoyue8w",
      "color": "e017da"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */