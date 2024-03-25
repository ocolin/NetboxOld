<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class FhrpGroups extends Data_Core implements DataInterface
{
    protected string $name;
    protected string $protocol;
    protected int    $group_id;
    protected string $auth_type;
    protected string $auth_key; // Authentication key. Max: 255
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


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'protocol', 'group_id' ];
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
            'ip_addresses'
        ];
    }



/*
----------------------------------------------------------------------------- */

    public static function validate() : array
    {
        return [ 
            'protocol'  => 'FhrpGroupProtocol',
            'auth_type' => 'FhrpGroupAuthType'
        ];
    }

    use Validation\FhrpGroupProtocol;
    use Validation\FhrpGroupAuthType;

}

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