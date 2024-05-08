<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class RackRoles extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of Role
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     * URL friendly Role name
     */
    protected string $slug;

    /**
     * @var string $color
     * Color code for Role
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
    protected int    $rack_count;


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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'status'      => [ 'Status' ],
            'slug'        => [ 'Slug', 100 ],
            'name'        => [ 'MaxString', 100 ],
            'color'       => [ 'MaxString', 6 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Status;
    use Validation\Slug;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

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