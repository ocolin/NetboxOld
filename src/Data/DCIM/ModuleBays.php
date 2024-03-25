<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class ModuleBays extends Data_Core implements DataInterface
{
    protected int    $device; // Class: DeviceTypes
    protected string $name; // Max: 64
    protected int    $installed_module;
    protected string $label; // Max: 64
    protected string $position; // Identifier to reference when renaming installed components
    protected string $description; // Max: 200

    /**
     * @var array<TagType>
     */
    
    protected array  $tags;
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
        return [ 'name', 'device' ];
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
  "device": 0,
  "name": "string",
  "installed_module": 0,
  "label": "string",
  "position": "string",
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "uyv",
      "color": "f5d0b0"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */