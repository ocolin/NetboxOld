<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class RackRoles extends Data_Core implements DataInterface
{
    protected int    $rack_count;
    protected string $name;
    protected string $slug;
    protected string $color;
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
            'rack_count'
        ];
    }


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [
            'status' => 'Status',
            'slug'   => 'Slug'
        ];
    }

    use Validation\Status;
    use Validation\Slug;
}

/**
{
  "name": "string",
  "slug": "wvpGVjlAgOpeI5aJp_",
  "color": "6ec36f",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "JY0qCYzB9Xv2ubLRuobviSTr84qizV7EsZcQvCbpgON6u9A3doR4AHCGWQOv_B_xPWKPnIvEslEEWOv__Hm",
      "color": "fe2f57"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */