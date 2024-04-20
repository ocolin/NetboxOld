<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Tenancy;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ContactRoles extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug; // Max: 100
    protected string $description; // MAx: 200

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
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    public static function validate() : array
    {
        return [ 'slug' => 'Slug' ];
    }

    use Validation\Slug;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "slug": "cqMPBkBV41J5oXhMsOXNPr4YjWbwJ57ttx0PqbqjBT",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "aLvTBwmxeG-vgBFCVuO6IqTnE2j7DFToT1ul0e1Ur8gC",
      "color": "92b57a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */