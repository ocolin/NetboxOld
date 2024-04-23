<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Virtualization;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ClusterGroups extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug; // Max: 100
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
            'cluster_count',
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
  "slug": "3nQzLZoCT",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "Nl0_i-9gi_wbBXp0Rkkv4WFrMUXeka-F1zY3-WjZiIOjEjitYZ5ShdSqu61NSiDlsN2trwwIqsBqAPu",
      "color": "bbf212"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */