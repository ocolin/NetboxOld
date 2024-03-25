<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Prefixes extends Data_Core implements DataInterface
{
    protected string $prefix; // CIDR
    protected int    $site; // CLass: DCIM/Sites
    protected int    $vrf; // Class: IPAM/Vrfs
    protected int    $tenant; // Class: Tenacy/tenants
    protected int    $vlan; // Class: IPAM/vlans
    protected string $status;
    protected int    $role; // Class: Roles
    protected bool   $is_pool; // All IP addresses within this prefix are considered usable
    protected bool   $mark_utilized; //  Treat as fully utilized
    protected string $description; // Max: 200
    protected string $comments;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_modified;
    protected string $family;
    protected int    $children;
    protected int    $_depth;


    /**
     * @var array<TagType> $tags
     */
    protected array  $tags;
    protected object $custom_fields;


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'prefix' ];
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
            'last_modified' ,
            'family',
            'children',
            '_depth'
        ];
    }


    
/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'prefix' => 'CIDR', 'status' => 'PrefixStatus' ];
    }

    use Validation\CIDR;
    use Validation\PrefixStatus;


/*
----------------------------------------------------------------------------- */

/**
 {
  "prefix": "string",
  "site": 0,
  "vrf": 0,
  "tenant": 0,
  "vlan": 0,
  "status": "container",
  "role": 0,
  "is_pool": true,
  "mark_utilized": true,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "_5KvT04MpUuha6CLffiRJKWATpZyG_1v6-0Ccn-I2xY",
      "color": "fc3770"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */
}