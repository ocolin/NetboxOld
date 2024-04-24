<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class DeviceTypes extends Data_Core implements DataInterface
{
    /**
     * @var int $manufacturer
     * ID of Manufacturers class
     */
    protected int $manufacturer;

    /**
     * @var int $default_platform
     * ID of Platforms class
     */
    protected int $default_platform;

    /**
     * @var string $model
     * REQUIRED
     * Name of device model
     */
    protected string $model;

    /**
     * @var string $slug
     * REQUIRED
     * URL friendly slug name
     */
    protected string $slug;

    /**
     * @var string $part_number
     * Discrete part number (optional)
     */
    protected string $part_number;

    /**
     * @var float $u_height
     * Rack height of device
     */
    protected float $u_height;

    /**
     * @var bool $exclude_from_utilization
     * Devices of this type are excluded when calculating rack utilization.
     */
    protected bool $exclude_from_utilization;

    /**
     * @var bool $is_full_depth
     * Device consumes both front and rear rack faces.
     */
    protected bool $is_full_depth;

    /**
     * @var string $subdevice_role
     * ENUM - Select parent or child
     */
    protected string $subdevice_role;

    /**
     * @var string $airflow
     * Choose the type of airflow
     */
    protected string $airflow;

    /**
     * @var float $weight
     * Weight of device
     */
    protected float $weight;

    /**
     * @var string $weight_unit
     * What unit of measurement for device height
     */
    protected string $weight_unit;

    /**
     * @var string $front_image
     * URL for image of device front
     */
    protected string $front_image;

    /**
     * @var string $rear_image
     * URL to image of device rear
     */
    protected string $rear_image;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;
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
 *  @return array<string, array<string>|int>
 */

    public static function validate() : array
    {
        return [
            'model'          => [ 'MaxString', 100 ],
            'subdevice_role' => [ 'DeviceRole' ],
            'airflow'        => [ 'Airflow' ],
            'weight_unit'    => [ 'WeightUnit' ],
            'slug'           => [ 'Slug', 100 ],
            'part_number'    => [ 'MaxString', 50 ],
            'u_height'       => [ 'MinNumber', 0 ],
            'description'    => [ 'MaxString', 200 ]
        ];
    }

    use Validation\Airflow;
    use Validation\DeviceRole;
    use Validation\WeightUnit;
    use Validation\Slug;
    use Validation\MaxString;
    use Validation\MinNumber;

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