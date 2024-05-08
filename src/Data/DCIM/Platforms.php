<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Platforms extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of platform
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     * URL friendly name for platform
     */
    protected string $slug;

    /**
     * @var int $manufacturer
     * ID of Manufacturers class
     */
    protected int $manufacturer;

    /**
     * @var int $config_template
     * ID of ConfigTemplate class
     */
    protected int $config_template;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var array<TagType>
     */
    protected array   $tags;
    protected object  $custom_fields;

    // READ ONLY
    protected int     $id;
    protected string  $url;
    protected string  $display;
    protected string  $created;
    protected string  $last_updated;
    protected int     $device_count;
    protected int     $virtualmachine_count;




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
            'device_count', 
            'virtualmachine_count'
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
            'name'        => [ 'MaxString', 100 ],
            'slug'        => [ 'Slug', 100 ],
            'description' => [ 'MaxString', 100 ],
        ];
    }

    use Validation\Slug;
    use Validation\MaxString;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 {
  "name": "string",
  "slug": "OZJC5YdJph2P9_jI46aXRmXxrSj5Y1H970tF",
  "manufacturer": 0,
  "config_template": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "-01j6CStYocVMUyFucV6yXh8",
      "color": "af9264"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */