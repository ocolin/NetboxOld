<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class DeviceBays extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * ID of Devices class
     */
    protected int $device;

    /**
     * @var string $name
     * Name of bay
     */
    protected string $name;

    /**
     * @var string $label
     * Label of bay
     */
    protected string $label;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var int $installed_device
     * ID of Devices class
     */
    protected int $installed_device;
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



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'name'        => [ 'MaxString', 64 ],
            'label'       => [ 'MaxString', 64 ],
            'description' => [ 'MaxString', 200 ]
        ];
    }

    use Validation\ConsolePortType;
    use Validation\MaxString;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

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