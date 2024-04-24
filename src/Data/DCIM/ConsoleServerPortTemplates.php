<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class ConsoleServerPortTemplates extends Data_Core implements DataInterface
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
     * @var string $description
     * Long description
     */
    protected string $description;

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
        return [ 'name' ];
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
            'type'        => [ 'ConsolePortType' ],
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
 * {
 * "device_type": 0,
 * "module_type": 0,
 * "name": "string",
 * "label": "string",
 * "type": "de-9",
 * "description": "string"
 * }
 */