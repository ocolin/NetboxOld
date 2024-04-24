<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class InventoryItems extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * REQUIRED
     * ID of Devices class
     */
    protected int $device; // Class: Devices

    /**
     * @var string $parent
     * Parent inventory item
     * Should this be an integer? Options says 'field'
     */
    protected string $parent;

    /**
     * @var string $name
     * REQUIRED
     * Name of item
     */
    protected string $name;

    /**
     * @var string $label
     * Physical label of item
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
     * @var string $serial
     * Serial number
     */
    protected string $serial;

    /**
     * @var string $asset_tag
     * A unique tag used to identify this item
     */
    protected string $asset_tag;

    /**
     * @var bool $discovered
     * This item was automatically discovered
     */
    protected bool $discovered;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $component_type;

    /**
     * @var int $component_id
     * ID of Components class
     */
    protected int $component_id;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;
    protected object $custom_fields;

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
            'name'         => [ 'MaxString', 100 ],
            'slug'         => [ 'Slug', 100 ],
            'color'        => [ 'MaxString', 6 ],
            'description'  => [ 'MaxString', 200 ],
            'serial'       => [ 'MaxString', 50 ],
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
  "device": 0,
  "parent": 0,
  "name": "string",
  "label": "string",
  "role": 0,
  "manufacturer": 0,
  "part_id": "string",
  "serial": "string",
  "asset_tag": "string",
  "discovered": true,
  "description": "string",
  "component_type": "string",
  "component_id": 9223372036854776000,
  "tags": [
    {
      "name": "string",
      "slug": "PUwj7dQiAwlQjyB_EUr8oaiiW-h9TkhQAFGXTncJpJ",
      "color": "076e37"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */