<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class InventoryItems extends Data_Core implements DataInterface
{

    protected int    $device; // Class: Devices
    protected string $parent;
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected int    $role; // CLass: InventoryRoles;
    protected int    $manufacturer;
    protected string $part_id; // Manufacturer-assigned part identifier
    protected string $serial; // max: 50
    protected string $asset_tag; // A unique tag used to identify this item
    protected bool   $discovered; // This item was automatically discovered
    protected string $description; // Max: 200
    protected string $component_type;
    protected int    $component_id;

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

}

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