<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class FrontPortTemplates extends Data_Core implements DataInterface
{
    /**
     * @var int $device_type
     * ID of DeviceTypes class
     */
    protected int $device_type;

    /**
     * @var int $module_type
     * ID of ModuleTypes class
     */
    protected int $module_type;

    /**
     * @var string $name
     * {module} is accepted as a substitution for the module
     * bay position when attached to a module type.
     */
    protected string $name;

    /**
     * @var string $label
     * Physical label of template
     */
    protected string $label;

    /**
     * @var string $type
     * Choose port type
     */
    protected string $type;

    /**
     * @var string $color
     * Color of port
     */
    protected string $color;

    /**
     * @var int $rear_port
     * ID of RearPorts class
     */
    protected int $rear_port;

    /**
     * @var int $rear_port_position
     * Mapped position on corresponding rear port
     */
    protected int $rear_port_position;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'type'               => ['PortType' ],
            'name'               => [ 'MaxString', 64 ],
            'label'              => [ 'MaxString', 64 ],
            'rear_port_position' => [ 'RangeInt', 1, 1024 ],
            'description'        => [ 'MaxString', 200 ]

        ];
    }

    use Validation\PortType;
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
  "type": "8p8c",
  "color": "9c083e",
  "rear_port": 0,
  "rear_port_position": 1024,
  "description": "string"
}
 */