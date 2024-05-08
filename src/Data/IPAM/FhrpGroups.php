<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class FhrpGroups extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * Name of group
     */
    protected string $name;

    /**
     * @var string $protocol
     * REQUIRED
     * Choose from list of protocols
     */
    protected string $protocol;

    /**
     * @var int $group_id
     * REQUIRED
     */
    protected int $group_id;

    /**
     * @var string $auth_type
     * Choose from list of authentication types
     */
    protected string $auth_type;

    /**
     * @var string $auth_key
     * Authentication key
     */
    protected string $auth_key;

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
    protected string $interface;
    protected int    $ip_addresses;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'protocol', 'group_id' ];
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
            'ip_addresses'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'name'          => [ 'MaxString', 100 ],
            'group_id'      => [ 'RangeInt', 0, 32767 ],
            'auth_key'      => [ 'MaxString', 255 ],
            'description'   => [ 'MaxString', 200 ],
            'protocol'      => [ 'FhrpGroupProtocol' ],
            'auth_type'     => [ 'FhrpGroupAuthType' ]
        ];
    }

    use Validation\FhrpGroupProtocol;
    use Validation\FhrpGroupAuthType;
    use Validation\MaxString;
    use Validation\RangeInt;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "protocol": "vrrp2",
  "group_id": 32767,
  "auth_type": "plaintext",
  "auth_key": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "6NzVNRlCWtc02rvGdIemFyvfQAErtKNQWyXKIMKnaIuqVmvX0JlrAeUdbhnPl4i5NMb2A7HzLEfWBuKMNaOJ2l",
      "color": "2bbdbe"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */