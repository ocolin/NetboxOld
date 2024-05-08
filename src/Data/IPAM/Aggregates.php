<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Aggregates extends Data_Core implements DataInterface
{
    /**
     * @var string $prefix
     * REQUIRED
     */
    protected string $prefix;

    /**
     * @var int $rir
     * REQUIRED
     * ID of Rirs class
     */
    protected int $rir;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $date_added
     */
    protected string $date_added;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
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


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'prefix', 'rir' ];
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
            'family'
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
            'prefix'        => [ 'CIDR' ],
            'date_added'    => [ 'Date' ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\CIDR;
    use Validation\Date;
    use Validation\MaxString;
    
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

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