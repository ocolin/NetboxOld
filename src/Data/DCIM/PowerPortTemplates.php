<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerPortTemplates extends Data_Core implements DataInterface
{
    /**
     * @var int $device_type
     * REQUIRED
     * ID of DeviceTypes class
     */
    protected int $device_type;

    /**
     * @var int $module_type
     * ID for ModuleTypes class
     */
    protected int $module_type;

    /**
     * @var string $name
     * REQUIRED
     * {module} is accepted as a substitution for the module
     * bay position when attached to a module type.
     */
    protected string $name;

    /**
     * @var string $label
     * Physical label
     */
    protected string $label;

    /**
     * @var string $type
     * ENUM
     */
    protected string $type;

    /**
     * @var int $maximum_draw
     * Maximum power draw (watts)
     */
    protected int $maximum_draw;

    /**
     * @var int $allocated_draw
     * Allocated power draw (watts)
     */
    protected int $allocated_draw;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

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
        return [ 'device_type', 'name' ];
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
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'type'            => ['PowerPortType'],
            'name'            => [ 'MaxString', 64 ],
            'label'           => [ 'MaxString', 64 ],
            'maximum_draw'    => [ 'RangeInt', 1, 2147483647 ],
            'allocated_draw'  => [ 'RangeInt', 1, 2147483647 ],
            'description'     => [ 'MaxString', 200 ],
        ];
    }

    use Validation\PowerPortType;
    use Validation\MaxString;
    use Validation\RangeInt;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device_type": 0,
  "module_type": 0,
  "name": "string",
  "label": "string",
  "type": "iec-60320-c6",
  "maximum_draw": 2147483647,
  "allocated_draw": 2147483647,
  "description": "string"
}
 */