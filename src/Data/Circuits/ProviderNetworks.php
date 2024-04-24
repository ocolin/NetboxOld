<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\MaxString;

class ProviderNetworks extends Data_Core implements DataInterface
{
    /**
     * @var int $provider
     * ID of Providers class
     */
    protected int $provider;
    protected string $name; // Max: 100
    protected string $service_id; // Max: 100
    protected string $description; // Max: 200
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;
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
        return [ 'provider', 'name' ];
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



/* VALIDATE
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>
     */

    public static function validate() : array
    {
        return [
            'name'        => [ 'MaxString', 100 ],
            'service_id'  => [ 'MaxString', 100 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "provider": 0,
  "name": "string",
  "service_id": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "O_F39-lkTJM1G1AffkXqyGhPd",
      "color": "a6f004"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */