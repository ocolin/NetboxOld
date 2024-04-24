<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ModuleBays extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * REQUIRED
     * ID of Devices class
     */
    protected int $device; // Class: DeviceTypes

    /**
     * @var string $name
     * REQUIRED
     * Name of Module Bay
     */
    protected string $name;

    /**
     * @var int $installed_module
     * ID of Modules class
     */
    protected int $installed_module;

    /**
     * @var string $label
     * Physical label
     */
    protected string $label;

    /**
     * @var string $position
     * Identifier to reference when renaming installed components
     */
    protected string $position;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

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
            'position'    => [ 'MaxString', 30 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Slug;
    use Validation\MaxString;

}

/* DATA EXAMPLE
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