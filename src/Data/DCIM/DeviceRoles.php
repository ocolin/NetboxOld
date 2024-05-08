<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class DeviceRoles extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     */
    protected string $slug;

    /**
     * @var string $color
     * Color code for role
     */
    protected string $color;

    /**
     * @var bool $vm_role
     * Virtual machines may be assigned to this role
     */
    protected bool $vm_role;

    /**
     * @var int $config_template
     * ID of ConfigTemplate class
     */
    protected int $config_template;

    /**
     * @var array<TagType> $tags
     */
    protected array  $tags;
    protected object $custom_fields;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    // READ ONLY
    protected int $id;
    protected int $device_count;
    protected int $virtualmachine_count;
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
        return [ 'name', 'slug' ];
    }



/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'status' => [ 'Status' ],
            'name'   => [ 'MaxString', 100 ],
            'slug'   => [ 'Slug', 100 ]
        ];
    }

    use Validation\Slug;
    use Validation\MaxString;

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
            'device_count',
            'virtualmachine_count'
        ];
    }
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 * {
 * "name": "string",
 * "slug": "8r97i1ZuYGMJ9QUJYyi-v4RDlgG11OajXQeM66qYkpOjiWdLACi2C4-_",
 * "color": "a6a90b",
 * "vm_role": true,
 * "config_template": 0,
 * "description": "string",
 * "tags": [
 * {
 * "name": "string",
 * "slug": "9ouCGj0piCDUcmd5Yvne6kLE8zqj8ZTiRGHhz-xZ7CrQKi76VDBo5MuyuzoxDWfe18-VLDTG_nC0YzKV-aSaSSrk",
 * "color": "f4ed4d"
 * }
 * ],
 * "custom_fields": {
 * "additionalProp1": "string",
 * "additionalProp2": "string",
 * "additionalProp3": "string"
 * }
 * }
 */