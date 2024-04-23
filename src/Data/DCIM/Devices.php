<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Devices extends Data_Core implements DataInterface
{
    protected string $name; // Max: 64
    protected int    $device_type; // Class: DeviceTypes
    protected int    $role; // Class: DeviceRols
    
    protected int    $tenant; // Class: Tenants
    protected int    $platform; // Class: Platforms
    protected string $serial; // Chassis serial number, assigned by the manufacturer
    protected string $asset_tag; // A unique tag used to identify this device
    protected int    $site; // Class: Sites
    protected int    $location; // Class: Locations
    protected int    $rack;
    protected float  $position; // Position (U)
    protected string $face;
    protected float  $latitude; // GPS coordinate in decimal format (xx.yyyyyy)
    protected float  $longitude; // GPS coordinate in decimal format (xx.yyyyyy)
    protected string $status;
    protected string $airflow; 
    
    protected object $primary_ip4; // look into this one
    protected object $primary_ip6; // Look into this one
    protected object $oob_ip; // Look into this one
    protected int    $cluster; // Class: Clusters
    protected int    $virtual_chassis; // Class: VirtualChassis
    protected int    $vc_position; // Max: 255
    protected int    $vc_priority; // Max: 255
    protected string $description; // Max: 200
    protected string $comments;
    protected int    $config_template; // Class: ConfigTemplates
    protected string $config_context;
    protected string $local_context_data; 
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected int    $device_role; 
    protected object $primary_ip;
    protected int    $parent_device;
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

    /**
     * @var array<TagType> $tags
     */

    protected array $tags;


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
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [ 
            'face'    => ['DeviceFace'],
            'status'  => ['Status'],
            'airflow' => ['Airflow']
        ];
    }

    use Validation\DeviceFace;
    use Validation\Status;
    use Validation\Airflow;

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