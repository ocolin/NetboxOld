<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class ConsoleServerPortTemplates extends Data_Core implements DataInterface
{
    protected int    $device_type; // Class: DeviceTypes
    protected int    $module_type; // Class: ModuleTypes
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $type;
    protected string $description; // Max: 200

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
        return [ 'name' ];
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
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'type' => 'ConsolePortType' ];
    }

    use Validation\ConsolePortType;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 * {
 * "device_type": 0,
 * "module_type": 0,
 * "name": "string",
 * "label": "string",
 * "type": "de-9",
 * "description": "string"
 * }
 */