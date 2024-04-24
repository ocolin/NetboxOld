<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Virtualization;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ClusterTypes extends Data_Core implements DataInterface
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
    protected int    $cluster_count;


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
            'cluster_count'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
    *  @return array<string, array<string>>
    */

    public static function validate() : array
    {
        return [
            'name'          => [ 'MaxString', 100 ],
            'slug'          => [ 'Slug' ],
            'status'        => [ 'Status' ],
            'description'   => [ 'MaxString', 200 ],
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
  "slug": "MoJ-PvvKU5albM",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "ReC6Wen_JYI-PZ4u0toEUzjPBJr7",
      "color": "329ec1"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */