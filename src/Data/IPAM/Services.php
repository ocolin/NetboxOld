<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Services extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * ID of Devices class
     */
    protected int $device;

    /**
     * @var int $virtual_machine
     * ID of VirtualMachines class
     */
    protected int $virtual_machine;

    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var array<int> $ports
     * REQUIRED
     * List of port number
     */
    protected array  $ports;

    /**
     * @var string $protocol
     * ENUM - TCP, UDP, SCTP
     */
    protected string $protocol;

    /**
     * @var array<int> $ipaddresses
     * List of IDs for IP address classes
     */
    protected array  $ipaddresses;

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
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [
            'protocol'          => [ 'ServiceProtocol' ],
            'name'              => [ 'MaxString', 100 ],
            'description'       => [ 'MaxString', 200 ],
        ];
    }

    use Validation\ServiceProtocol;
    use Validation\MaxString;
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