<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Devices extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * Name of device
     */
    protected string $name;

    /**
     * @var int $device_type
     * REQUIRED
     * ID of DeviceTypes class
     */
    protected int $device_type;

    /**
     * @var int $role
     * REQUIRED
     * ID of DeviceRoles class
     */
    protected int $role;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var int $platform
     * ID of Platforms class
     */
    protected int $platform;

    /**
     * @var string $serial
     * Chassis serial number, assigned by the manufacturer
     */
    protected string $serial;

    /**
     * @var string $asset_tag
     * A unique tag used to identify this device
     */
    protected string $asset_tag;

    /**
     * @var int $site
     * REQUIRED
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int
     * ID of Locations class
     */
    protected int $location;

    /**
     * @var int $rack
     * ID of Racks class
     */
    protected int $rack;

    /**
     * @var float $position
     * Position in rack
     */
    protected float $position;

    /**
     * @var string $face
     * ENUM
     */
    protected string $face;

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
     * @var string $status
     * Device status from list
     */
    protected string $status;

    /**
     * @var string $airflow
     * ENUM
     */
    protected string $airflow;

    /**
     * @var int $primary_ip4
     * ID of IpAddresses class
     */
    protected int $primary_ip4;

    /**
     * @var int $primary_ip6
     * ID of IpAddresses class
     */
    protected int $primary_ip6;

    /**
     * @var int $oob_ip
     * ID of IpAddresses class
     */
    protected int $oob_ip;

    /**
     * @var int $cluster
     * ID of Clusters class
     */
    protected int $cluster;

    /**
     * @var int $virtual_chassis
     * ID of VirtualChassis class
     */
    protected int $virtual_chassis;

    /**
     * @var int $vc_position
     * Position in virtual chassis
     */
    protected int $vc_position;

    /**
     * @var int $vc_priority
     * Virtual chassis master election priority
     */
    protected int $vc_priority;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $comments;

    /**
     * @var int $config_template
     * ID of ConfigTemplate class
     */
    protected int $config_template;

    /**
     * @var string $local_context_data
     * Local config context data takes precedence over
     * source contexts in the final rendered config context
    */
    protected string $local_context_data;

    /**
     * @var array<TagType> $tags
     */

    protected array $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected int    $device_role;
    protected string $config_context;
    protected string $created;
    protected string $last_updated;
    protected int    $console_port_count;
    protected int    $console_server_port_count;
    protected int    $power_port_count;
    protected int    $power_outlet_count;
    protected int    $interface_count;
    protected int    $front_port_count;
    protected int    $rear_port_count;
    protected int    $device_bay_count;
    protected int    $module_bay_count;
    protected int    $inventory_item_count;



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [
            'device_type',
            'role',
            'site'
        ];
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
            'device_role',
            'parent_device',
            'primary_ip',
            'config_context',
            'created',
            'last_updated',
            'console_port_count',
            'power_port_count',
            'power_outlet_count',
            'interface_count',
            'front_port_count',
            'rear_port_count',
            'device_bay_count',
            'module_bay_count',
            'inventory_item_count'
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
            'face'        => [ 'DeviceFace' ],
            'status'      => [ 'Status' ],
            'airflow'     => [ 'Airflow' ],
            'name'        => [ 'MaxString', 64 ],
            'serial'      => [ 'MaxString', 50 ],
            'asset_tag'   => [ 'MaxString', 50 ],
            'vc_position' => [ 'RangeInt', 0, 255 ],
            'vc_priority' => [ 'RangeInt', 0, 255 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\DeviceFace;
    use Validation\Status;
    use Validation\Airflow;
    use Validation\MaxString;
    use Validation\RangeInt;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "device_type": 0,
  "role": 0,
  "tenant": 0,
  "platform": 0,
  "serial": "string",
  "asset_tag": "string",
  "site": 0,
  "location": 0,
  "rack": 0,
  "position": 999,
  "face": "front",
  "latitude": 99,
  "longitude": 999,
  "status": "offline",
  "airflow": "front-to-rear",
  "primary_ip4": 0,
  "primary_ip6": 0,
  "oob_ip": 0,
  "cluster": 0,
  "virtual_chassis": 0,
  "vc_position": 255,
  "vc_priority": 255,
  "description": "string",
  "comments": "string",
  "config_template": 0,
  "local_context_data": "string",
  "tags": [
    {
      "name": "string",
      "slug": "3d0PXBpDTAkohC6HGFzJsfUZIExhYFMLhL5jna9Ma0FAu7Lx1JhV97GmEf9JytS9Nsz86pbhEt1OQ6_Tp4ocm0yVfeRArJrw",
      "color": "a7796a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */