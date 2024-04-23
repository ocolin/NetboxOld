<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Tenancy;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ContactGroups extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug; // Max: 100
    protected int    $parent; // Class: TenantGroups
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
    protected int    $contact_count;
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
            'contact_count',
            '_depth'
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string>>
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
  "slug": "WmUEl__CsZX5dEXsknYrg8ia4NkXCcKXDHWLsOLL3uJ",
  "parent": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "3hAArrSwjorXglXzLlzPm",
      "color": "501d26"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */