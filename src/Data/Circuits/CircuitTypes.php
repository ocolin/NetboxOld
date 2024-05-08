<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\MaxString;

class CircuitTypes extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     */
    protected string $slug;

    /**
     * @var string $color
     * Color code of Circuit
     */
    protected string $color;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var array<TagType> $tags
     */
     protected array  $tags;
     protected object $custom_fields;

     // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int    $circuit_count;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'slug' ];
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
            'circuit_count'
        ];
    }


/* VALIDATE
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'name'        => [ 'MaxString', 100 ],
            'slug'        => [ 'MaxString', 100 ],
            'color'       => [ 'MaxString', 6 ],
            'description' => [ 'MaxString', 200 ]
        ];
    }

    use MaxString;
}


/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "slug": "kIyltsrIUTn4cPvCdThqm41e5lcK9hGa_EHfC1bK9M5P6",
  "color": "b74495",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "kHngW272mbwi0ehzhydymb6YPCN39r2WauRfBh_Ra824WMOgDljAX9Hv4b7VGcke6PhdU4DrMg48",
      "color": "1059e5"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */