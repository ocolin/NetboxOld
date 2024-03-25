<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ServiceTemplates extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100

    /**
     * @var array<int> $ports
     */
    protected array  $ports;
    protected string $protocol;
    protected string $description; // Max: 200
    protected string $comments;
    protected object $custom_fields;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_modified;


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'ports', 'protocol' ];
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
        ];
    }


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'protocol' => 'ServiceProtocol' ];
    }

    use Validation\ServiceProtocol;

}

/**
{
  "name": "string",
  "ports": [
    65535
  ],
  "protocol": "tcp",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "VKhMWDhC5W_0QuPgcRL0TS7o9jotRpU5LyMHkie2lZ9-5bt4YMlIfep8jV19IaKxpyqy97cKH_",
      "color": "3c60ba"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */