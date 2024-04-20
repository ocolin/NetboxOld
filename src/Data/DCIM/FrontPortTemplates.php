<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class FrontPortTemplates extends Data_Core implements DataInterface
{
    protected int    $device_type; // Class: DeviceTypes
    protected int    $module_type; // Class: ModuleTypess
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $type; 
    protected string $color; // Max: 6
    protected int    $rear_port; // Class; RearPorts
    protected int    $rear_port_position; // Mapped position on corresponding rear port
    protected string $description; // Max: 200

    /**
     * @var array<TagType> $tags
     */
    
    protected array $tags;

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
        return [ 'name', 'type', 'rear_port' ];
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
            'last_modified',
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'type' => 'PortType' ];
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
  "color": "9c083e",
  "rear_port": 0,
  "rear_port_position": 1024,
  "description": "string"
}
 */