<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class InventoryItemTemplates extends Data_Core implements DataInterface
{
    /**
     * @var int $device_type
     * ID of Devices class
     */
    protected int $device_type;
    protected string $parent;

    /**
     * @var string $name
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
     * @var int $role
     * ID of InventoryRoles class
     */
    protected int $role;

    /**
     * @var int $manufacturer
     * ID of Manufacturers class
     */
    protected int $manufacturer;

    /**
     * @var string $part_id
     * Manufacturer-assigned part identifier
     */
    protected string $part_id;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $component_type;
    protected int    $component_id;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $component;
    protected string $created;
    protected string $last_updated;
    protected int    $_depth;


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
            'component',
            '_depth'
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
            'name'         => [ 'MaxString', 64 ],
            'label'        => [ 'MaxString', 64 ],
            'part_id'      => [ 'MaxString', 50 ],
            'description'  => [ 'MaxString', 200 ],
            'component_id' => [ 'RangeInt', 0, 9223372036854775807 ]
        ];
    }

    use Validation\Slug;
    use Validation\MaxString;
    use Validation\RangeInt;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device_type": 0,
  "parent": 0,
  "name": "string",
  "label": "string",
  "role": 0,
  "manufacturer": 0,
  "part_id": "string",
  "description": "string",
  "component_type": "string",
  "component_id": 9223372036854776000
}
 */