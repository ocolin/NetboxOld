<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Modules extends Data_Core implements DataInterface
{
    protected int    $device; // Class: Devices
    protected int    $module_bay; // Class: ModuleBays
    protected int    $module_type; // Class: ModuleTypes
    protected string $status;
    protected string $serial; // Serial number. Max: 50
    protected string $asset_tag; // A unique tag used to identify this device. Max 50
    protected string $description; // Max: 200
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


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'device', 'module_bay', 'module_type' ];
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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'status' => 'ModuleBayStatus' ]; 
    }

    use Validation\ModuleBayStatus;    
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device": 0,
  "module_bay": 0,
  "module_type": 0,
  "status": "offline",
  "serial": "string",
  "asset_tag": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "Tp",
      "color": "cf1d80"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */