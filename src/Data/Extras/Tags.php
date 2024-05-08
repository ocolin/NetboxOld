<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class Tags extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of tag
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     * URL friendly name
     */
    protected string $slug;

    /**
     * @var string $color
     * Color code for Tag
     */
    protected string $color;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var array<string> $object_types
     */
    protected array $object_types;


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int $tagged_items;



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
            'tagged_items'
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
            'name'          => [ 'MaxString', 100 ],
            'slug'          => [ 'Slug', 100 ],
            'color'         => [ 'MaxString', 6 ],
            'description'   => [ 'MaxString', 200 ],
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
  "slug": "wCp0802jxFaeuM",
  "color": "16fb6b",
  "description": "string",
  "object_types": [
    "string"
  ]
}
 */