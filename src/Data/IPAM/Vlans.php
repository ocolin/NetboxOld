<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Vlans extends Data_Core implements DataInterface
{
    /**
     * @var int $site
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $group
     * ID of VlanGroups class
     */
    protected int $group;

    /**
     * @var int $vid
     * REQUIRED
     * Numeric VLAN ID (1-4094)
     */
    protected int $vid;

    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var int $tenant
     */
    protected int $tenant;

    /**
     * @var string $status
     * ENUM - active, reserved, deprecated
     */
    protected string $status;

    /**
     * @var int $role
     * ID of Roles class
     */
    protected int $role;

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
    protected int    $aggregate_count;
    protected int    $l2vpn_termination;
    protected int    $prefix_count;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'vid', 'name' ];
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
            'l2vpn_termination',
            'prefix_count'
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
            'status'        => [ 'VlanStatus' ],
            'vid'           => [ 'RangeInt', 1, 4094 ],
            'name'          => [ 'MaxString', 64 ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\VlanStatus;
    use Validation\RangeInt;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "site": 0,
  "group": 0,
  "vid": 4094,
  "name": "string",
  "tenant": 0,
  "status": "active",
  "role": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "-SN3w1zSF6eJP9fC3ucsLlzyWQUeY_Nuh",
      "color": "3a096b"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
*/