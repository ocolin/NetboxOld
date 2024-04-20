<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class VirtualChassis extends Data_Core implements DataInterface
{
    protected int    $master;
    protected string $name;
    protected string $domain;
    protected string $description;
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */
    
    protected array  $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected int    $member_count;
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
            'member_count'
        ];
    }

    
/* VALIDATE PARAMETERS
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

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "domain": "string",
  "master": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "Ue2cH45r8GZI8V040mjo9AhBjOFoHZZaIX6DW04mp8e0VFOfKY_0CM4",
      "color": "461c05"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */