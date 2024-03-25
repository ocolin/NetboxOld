<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Tenancy;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class TenantGroups extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug; // Max: 100
    protected int    $parent; // Class: TenantGroups
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
    protected int    $tenant_count;
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
            'tenant_count',
            '_depth'
        ];
    }

}

/**
{
  "name": "string",
  "slug": "H2PJyB_qc5vjZiQV5IuEgWwYmf9gyq4KC4FQ2NdMT0ww",
  "parent": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "PvXIupXwz2ExCEYEZ_jCaxf7FseTIthNcAt8aVxAz3WZlGvU0doC",
      "color": "344e59"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */