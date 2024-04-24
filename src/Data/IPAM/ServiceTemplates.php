<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ServiceTemplates extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var array<int> $ports
     * REQUIRED
     * List of service ports
     */
    protected array  $ports;

    /**
     * @var string $protocol
     * ENUM - tcp, udp, sctp
     */
    protected string $protocol;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
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


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'ports', 'protocol' ];
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
            'protocol'      => ['ServiceProtocol'],
            'name'          => [ 'MaxString', 100 ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\ServiceProtocol;
    use Validation\MaxString;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

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