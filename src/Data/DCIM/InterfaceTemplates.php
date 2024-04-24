<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class InterfaceTemplates extends Data_Core implements DataInterface
{
    /**
     * @var int $site
     * ID of Sites class
     */
    protected int $site;

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
     * Name of template
     */
    protected string $name;

    /**
     * @var string $label
     * {module} is accepted as a substitution for the module
     * bay position when attached to a module type.
     */
    protected string $label;

    /**
     * @var string $type
     * Choose from list of types
     */
    protected string $type;

    /**
     * @var bool $enabled
     * Is interface enabled or disabled
     */
    protected bool $enabled;

    /**
     * @var bool $mgmt_only
     * Is interface only used for out of band management
     */
    protected bool $mgmt_only;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var int $bridge
     * ID of Bridges class
     */
    protected int $bridge;

    /**
     * @var string $poe_mode
     * Choose from list of modes
     */
    protected string $poe_mode;

    /**
     * @var string $poe_type
     * Choose from list of types
     */
    protected string $poe_type;

    /**
     * @var string $rf_role
     * Choose from list of RF roles
     */
    protected string $rf_role;


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;

    /**
     * @var array<TagType>
     */
    
    protected array  $tags;
    protected object $custom_fields;


/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'type' ];
    }


/* VALIDATE PARAMETERS
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


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'type'        => ['InterfaceType'],
            'name'        => [ 'MaxString', 64 ],
            'label'       => [ 'MaxString', 64 ],
            'description' => [ 'MaxString', 200 ]
        ];
    }

    use Validation\InterfaceType;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device_type": 0,
  "module_type": 0,
  "name": "string",
  "label": "string",
  "type": "virtual",
  "enabled": true,
  "mgmt_only": true,
  "description": "string",
  "bridge": 0,
  "poe_mode": "pd",
  "poe_type": "type1-ieee802.3af",
  "rf_role": "ap"
}
 */