<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class SiteGroups extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of site group
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     * URL friendly name of site group
     */
    protected string $slug;

    /**
     * @var int $parent
     * ID of parent site group
     */
    protected int $parent;

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
    protected int    $site_count;
    protected int    $_depth;
    protected string $url;
    protected string $display;


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
            'site_count',
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
            'status'        => [ 'Status' ],
            'slug'          => [ 'Slug', 100 ],
            'name'          => [ 'MaxString', 100 ],
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
  "slug": "pGqWelFZ065Qh-aK4dTuFv0ocgSdJZTmtf-WAMPVFz9C",
  "parent": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "T",
      "color": "a4ba04"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */