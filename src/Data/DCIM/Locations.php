<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Locations extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of location
     */
    protected string $name;

    /**
     * @var string $slug
     */
    protected string $slug;

    /**
     * @var int $site
     * REQUIRED
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $parent
     * REQUIRED
     * ID of parent Locations class
     */
    protected int $parent;

    /**
     * @var string $status
     * Location status
     */
    protected string $status;

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

    /**
     * @var array<TagType>
     */
    protected array  $tags;
    protected object $custom_fields;


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int $rack_count;
    protected int $device_count;
    protected int $_depth;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'slug', 'site' ];
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
            'rack_count',
            'device_count',
            '_depth'
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
            'status'      => [ 'Status'],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Slug;
    use Validation\Status;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 {
  "name": "string",
  "slug": "KbFX_r0LXvC5JBRj5s218-cDHraozz",
  "site": 0,
  "parent": 0,
  "status": "planned",
  "tenant": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "5wg7wOP1V5eoaX4JbydwOuxSbPxkvCXABsl0fZBBuHlM8BzgtDTtrtskJ",
      "color": "ee2487"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */