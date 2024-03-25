<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Vlans extends Data_Core implements DataInterface
{
    protected int    $site; // Class: DCIM/Sites
    protected int    $group; // Class: VlanGroups
    protected int    $vid; // Numeric VLAN ID (1-4094)
    protected string $name; // Max: 64
    protected int    $tenant; // Class: Tenacy\Tenants
    protected string $status;
    protected int    $role; // Class: Roles
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
    protected int    $aggregate_count;
    protected int    $l2vpn_termination;
    protected int    $prefix_count;


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'vid', 'name' ];
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
            'l2vpn_termination',
            'prefix_count'
        ];
    }


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'status' => 'VlanStatus' ];
    }

    use Validation\VlanStatus;
}



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