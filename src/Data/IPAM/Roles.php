<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Roles extends Data_Core implements DataInterface
{
    protected string $name;
    protected string $slug;
    protected int    $weight;
    protected string $description; // Max: 200

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
    protected string $last_modified;
    protected int    $prefix_count;
    protected int    $vlan_count;
    

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
            'last_modified',
            'prefix_count',
            'vlan_count'
        ];
    }


    
/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [ 'slug' => ['Slug'] ];
    }

    use Validation\Slug;
}


/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "slug": "C7A7eC2QXlDzmmYzdoj04R9werkdcLB1dMq",
  "weight": 32767,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "yKioF_CbIozzbdI",
      "color": "cf3a38"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */