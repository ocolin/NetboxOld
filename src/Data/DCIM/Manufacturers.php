<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Manufacturers extends Data_Core implements DataInterface
{
    protected string $name;
    protected string $slug;
    protected string $description;

    /**
     * @var array<TagType>
     */
    
    protected array  $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int $id;
    protected int $devicetype_count;
    protected int $inventoryitem_count;
    protected int $platform_count;
    protected string $created;
    protected string $last_updated;


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
            'devicetype_count',
            'inventoryitem_count',
            'platform_count'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'slug' => 'Slug' ];
    }

    use Validation\Slug;
    
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 {
  "name": "string",
  "slug": "nxOVyG5Gwg4nTGi90hiNY144_EIDlBAn6vHrj8",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "hQJRBM1mPwnlTYGIzfx2lTqLJ92ilgmdYiW35gEIBD_kh3_s",
      "color": "6de70a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */