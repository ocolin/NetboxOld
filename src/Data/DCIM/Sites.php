<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Sites extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of site
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     *
     * URL friendly name of site
     */
    protected string $slug;

    /**
     * @var string $status
     * Choose from list of site statuses
     */
    protected string $status;

    /**
     * @var int $region
     * ID of Regions class
     */
    protected int $region;

    /**
     * @var int $group
     * ID of Groups class
     */
    protected int $group;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $facility
     * Local facility ID or description
     */
    protected string $facility;

    /**
     * @var string $time_zone
     * Name of timezone of site
     */
    protected string $time_zone;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var string $physical_address
     * Physical location of the building
     */
    protected string $physical_address;

    /**
     * @var string $shipping_address
     * If different from the physical address
     */
    protected string $shipping_address;
    protected string $comments;

    /**
     * @var float $latitude
     * GPS coordinate in decimal format (xx.yyyyyy)
     */
    protected float $latitude;

    /**
     * @var float $longitude
     * GPS coordinate in decimal format (xx.yyyyyy)
     */
    protected float $longitude;

    /**
     * @var array<string> $asns
     * List of Asns IDs
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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'status'            => [ 'Status' ],
            'slug'              => [ 'Slug', 100 ],
            'name'              => [ 'MaxString', 100 ],
            'facility'          => [ 'MaxString', 50 ],
            'description'       => [ 'MaxString', 200 ],
            'physical_address'  => [ 'MaxString', 200 ],
            'shipping_address'  => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Status;
    use Validation\Slug;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 {
  "name": "string",
  "slug": "t46BaAmWAeCtLCc1kyhG7uhS05xASgoszPt4,
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