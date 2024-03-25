<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Aggregates extends Data_Core implements DataInterface
{
    protected string $prefix;
    protected int    $rir; // Class: IPAM/Rirs
    protected int    $tenant; // Class: Tenancy/Tenants
    protected string $date_added; // Date
    protected string $description; // Max: 200
    protected string $comments;

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
    protected string $family;


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'prefix', 'rir' ];
    }


/*
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
            'family'
        ];
    }



/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function validate() : array
    {
        return [ 'prefix' => 'CIDR' ];
    }

    use Validation\CIDR;
    
}

/**
{
  "prefix": "string",
  "rir": 0,
  "tenant": 0,
  "date_added": "2024-03-20",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "LMAvtQtytlcF1NmCSLLEzY-md47BEC-NYucd1uyCAj",
      "color": "84cc2a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */