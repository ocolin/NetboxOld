<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Sites extends Data_Core implements DataInterface
{
    protected int   $parent;
    protected int   $group;
    protected int   $region;
    protected int   $tenant;

    protected string $name; // Full name of the site
    protected string $slug;
    protected string $status;
    protected string $facility;
    protected string $time_zone;
    protected string $description;
    protected string $physical_address;
    protected string $shipping_address;
    protected string $comments;
    protected float $latitude;
    protected float $longitude;

    /**
     * @var array<string> $asns
     */
    
    protected array  $asns;

    /**
     * @var array<TagType>
     */
    
    protected array  $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int   $id;
    protected string $created;
    protected string $last_updated;
    protected int   $circuit_count;
    protected int   $device_count;
    protected int   $prefix_count;
    protected int   $rack_count;
    protected int   $virtualmachine_count;
    protected int   $vlan_count;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'slug' ];
    }


/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

    public static function readonly() : array
    {
        return [
            'id',
            'url',
            'display',
            'created',
            'last_modified',
            'circuit_count',
            'device_count',
            'prefix_count',
            'rack_count',
            'virtualmachine_count',
            'vlan_count'
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
            'status' => ['Status'],
            'slug'   => ['Slug']
        ];
    }

    use Validation\Status;
    use Validation\Slug;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 {
  "name": "string",
  "slug": "t46BaAmWAeCtLCc1kyhG7uhS05xASgoszPt400QfqoNIuma5NY3TaGIi4rAubOFtiMkf-kntxYWbN_t7DvWAhomxHDyRWvizZf5",
  "status": "planned",
  "region": 0,
  "group": 0,
  "tenant": 0,
  "facility": "string",
  "time_zone": "string",
  "description": "string",
  "physical_address": "string",
  "shipping_address": "string",
  "latitude": 99,
  "longitude": 999,
  "comments": "string",
  "asns": [
    0
  ],
  "tags": [
    {
      "name": "string",
      "slug": "BHcdnIdjG2WUBoxN5IR61QjKNO",
      "color": "f214fb"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */