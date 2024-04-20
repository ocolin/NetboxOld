<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Services extends Data_Core implements DataInterface
{
    protected int    $device; // Class: DCIM/Devices
    protected int    $virtual_machine;
    protected string $name;

    /**
     * @var array<int> $ports
     */

    protected array  $ports;
    protected string $protocol;

    /**
     * @var array<int> $ipaddresses
     */

    protected array  $ipaddresses;
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



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name' , 'ports' ];
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
        ];
    }


/* VALIDATE PARAMETERS
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

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device": 0,
  "virtual_machine": 0,
  "name": "string",
  "ports": [
    65535
  ],
  "protocol": "tcp",
  "ipaddresses": [
    0
  ],
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "x9Uq2uIZOw4z9vJ0YG4vyT8nTJOmsU2BhVQkS1HzRMizunBrs8eje09ARB3_0IU",
      "color": "68d318"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */