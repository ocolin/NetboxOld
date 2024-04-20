<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class InventoryItemTemplates extends Data_Core implements DataInterface
{

    protected int    $device_type;
    protected string $parent;
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected int    $role; // CLass: InventoryRoles;
    protected int    $manufacturer;
    protected string $part_id; // Manufacturer-assigned part identifier
    protected string $description; // Max: 200
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