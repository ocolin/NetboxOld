<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Modules extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * REQUIRED
     * ID of Devices class
     */
    protected int $device;

    /**
     * @var int $module_bay
     * REQUIRED
     * ID of ModuleBays class
     */
    protected int $module_bay;

    /**
     * @var int $module_type
     * REQUIRED
     * ID of ModuleTypes class
     */
    protected int $module_type;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var string $serial
     * Serial Number
     */
    protected string $serial;

    /**
     * @var string $asset_tag
     * A unique tag used to identify this device.
     */
    protected string $asset_tag;

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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'status'      => [ 'ModuleBayStatus' ],
            'serial'      => [ 'MaxString', 50 ],
            'asset_tag'   => [ 'MaxString', 50 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\ModuleBayStatus;
    use Validation\MaxString;
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