<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Wireless;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class WirelessLanGroups extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug; // Max: 100
    protected int    $parent; // Class: WirelessLanGroups
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
    protected string $last_updated;
    protected int    $wirelesslan_count;
    protected int    $_depth;



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
            'wirelesslan_count',
            '_depth'
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
  "slug": "KN5TU9gpEEnvhzPlWKCRQmvmUpWpU1H4OhlpftO2lAShlztJB89EQHy",
  "parent": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "B7-BA4oNQW6OCDoKA1PWduf_78gtu7U7khGePghOqDWu16hhSJmJkSxUrBNyT_3XM2rX9anlGbTyWG",
      "color": "fcb58a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */