<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class ModuleBayTemplates extends Data_Core implements DataInterface
{

    protected int    $device_type; // Class: DeviceTypes
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $position; // Identifier to reference when renaming installed components
    protected string $description; // Max: 200

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
        return [ 'name', 'device_type' ];
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

}


/*
----------------------------------------------------------------------------- */

/**
{
  "device_type": 0,
  "name": "string",
  "label": "string",
  "position": "string",
  "description": "string"
}
 */