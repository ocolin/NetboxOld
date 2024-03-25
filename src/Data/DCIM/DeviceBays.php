<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class DeviceBays extends Data_Core implements DataInterface
{
    protected int    $device; // CLass: Devices
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $description; // Max: 200
    protected int    $installed_device; 
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;

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
            'last_updated'
        ];
    }
}

/**
{
  "device": 0,
  "name": "string",
  "label": "string",
  "description": "string",
  "installed_device": 0,
  "tags": [
    {
      "name": "string",
      "slug": "ZyBB4bvX98PW9wiI1NaqK3-HhNx99xulVP7gT6",
      "color": "f3c5dc"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */