<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Prefixes extends Data_Core implements DataInterface
{
    /**
     * @var string $prefix
     * REQUIRED
     */
    protected string $prefix;

    /**
     * @var int $site
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $vrf
     * ID of Vrfs class
     */
    protected int $vrf;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var int $vlan
     * Id of Vlans class
     */
    protected int $vlan;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var int $role
     * ID of Roles class
     */
    protected int $role;

    /**
     * @var bool $is_pool
     * All IP addresses within this prefix are considered usable
     */
    protected bool $is_pool;

    /**
     * @var bool $mark_utilized
     * Treat as fully utilized
     */
    protected bool $mark_utilized;

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
    protected string $family;
    protected int    $children;
    protected int    $_depth;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'prefix' ];
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
            'last_modified' ,
            'family',
            'children',
            '_depth'
        ];
    }


    
/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'prefix'        => ['CIDR'],
            'status'        => ['PrefixStatus'],
            'description'   => [ 'MaxString', 200 ]
        ];
    }

    use Validation\CIDR;
    use Validation\PrefixStatus;
    use Validation\MaxString;


/* DATA EXAMPLE
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