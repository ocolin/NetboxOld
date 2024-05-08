<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ModuleTypes extends Data_Core implements DataInterface
{
    /**
     * @var int $manufacturer
     * REQUIRED
     * ID of Manufacturers class
     */
    protected int $manufacturer;

    /**
     * @var string $model
     * REQUIRED
     * Name of module model
     */
    protected string $model;

    /**
     * @var string $part_number
     * Discrete part number (optional)
     */
    protected string $part_number;

    /**
     * @var float $weight
     * Value of module weight
     */
    protected float $weight;

    /**
     * @var string $weight_unit
     * Unit of measurement for weight
     */
    protected string $weight_unit;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $comments;
    protected object $custom_fields;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;

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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'weight_unit' => [ 'WeightUnit' ],
            'model'       => [ 'MaxString', 100 ],
            'part_number' => [ 'MaxString', 50 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\WeightUnit;
    use Validation\MaxString;
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