<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class DeviceTypes extends Data_Core implements DataInterface
{
    protected int    $manufacturer; // Class: Manufacturers
    protected int    $default_platform; // Class: Platforms
    protected string $model; // Max: 100
    protected string $slug; // Max: 100
    protected string $part_number; // Discrete part number (optional). Max: 50
    protected float  $u_height; // Position (U)
    protected bool   $exclude_from_utilization; // Exclude from utilization
    protected bool   $is_full_depth; // Device consumes both front and rear rack faces.
    protected string $subdevice_role; 
    protected string $airflow;
    protected float  $weight;
    protected string $weight_unit;
    protected string $front_image; // URL
    protected string $rear_image; // URL
    protected string $description; // Max: 200
    protected string $comments; 
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int    $device_count;
    protected int    $console_port_template_count; 
    protected int    $console_server_port_template_count;
    protected int    $power_port_template_count;
    protected int    $power_outlet_template_count;
    protected int    $interface_template_count;
    protected int    $front_port_template_count;
    protected int    $rear_port_template_count;
    protected int    $device_bay_template_count;
    protected int    $module_bay_template_count;
    protected int    $inventory_item_template_count;

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
        return [ 'model', 'slug', 'manufacturer' ];
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
            'last_updated',
            'device_count',
            'console_port_template_count',
            'console_server_port_template_count',
            'power_port_template_count',
            'power_outlet_template_count',
            'interface_template_count',
            'front_port_template_count',
            'rear_port_template_count',
            'device_bay_template_count',
            'module_bay_template_count',
            'inventory_item_template_count'
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
            'subdevice_role' => ['DeviceRole'],
            'airflow'        => ['Airflow'],
            'weight_unit'    => ['WeightUnit'],
            'slug'           => ['Slug']
        ];
    }

    use Validation\Airflow;
    use Validation\DeviceRole;
    use Validation\WeightUnit;
    use Validation\Slug;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "manufacturer": 0,
  "default_platform": 0,
  "model": "string",
  "slug": "3kRqLlr2dVJF",
  "part_number": "string",
  "u_height": 1,
  "exclude_from_utilization": true,
  "is_full_depth": true,
  "subdevice_role": "parent",
  "airflow": "front-to-rear",
  "weight": 999999,
  "weight_unit": "kg",
  "front_image": "string",
  "rear_image": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "X9_c5-S3eE7JRljdBvG04MPq10t6ZPf1TpVRUQDjtlqktqOweCnbSwejNVz4FCvspDR",
      "color": "7f38a6"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */