<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerPortTemplates extends Data_Core implements DataInterface
{
    protected int    $device_type; // Class: DeviceTypes
    protected int    $module_type; // Class: ModuleTypes
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $type;
    protected int    $maximum_draw; // Maximum power draw (watts)
    protected int    $allocated_draw; // Allocated power draw (watts)
    protected string $description; // Max: 200

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


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'device', 'name' ];
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
        ];
    }


/* 
----------------------------------------------------------------------------- */

    public static function validate() : array
    {
        return [ 'type' => 'PowerPortType' ];
    }

    use Validation\PowerPortType;
}

/**
{
  "device_type": 0,
  "module_type": 0,
  "name": "string",
  "label": "string",
  "type": "iec-60320-c6",
  "maximum_draw": 2147483647,
  "allocated_draw": 2147483647,
  "description": "string"
}
 */