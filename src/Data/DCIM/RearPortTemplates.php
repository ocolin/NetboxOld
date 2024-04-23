<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class RearPortTemplates extends Data_Core implements DataInterface
{
    protected int    $device_type; // Class DeviceType
    protected int    $module_type; // CLass ModuleType
    protected string $name; // Max: 64
    protected string $label; // Max: 64 Physical label
    protected string $type;
    protected string $color; // Max: 6
    protected int    $positions; // Min :1 Max: 1024
    protected string $description;

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
        return [ 'name', 'type' ];
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
            'last_updated'
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [ 'type' => ['PortType'] ];
    }

    use Validation\PortType;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device_type": 0,
  "module_type": 0,
  "name": "string",
  "label": "string",
  "type": "8p8c",
  "color": "b6d746",
  "positions": 1024,
  "description": "string"
}
 */