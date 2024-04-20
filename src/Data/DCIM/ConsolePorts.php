<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ConsolePorts extends Data_Core implements DataInterface
{ 
    protected int    $device; // Class: Devices
    protected int    $module; // Class: Module
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $type; 
    protected int    $speed;
    protected string $description; // Max: 200
    protected bool   $mark_connected; // Treat as if a cable is connected
    protected object $custom_fields;

    /**
     * @var array<TagType> $tags
     */

    protected array $tags;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected object $cable; // Class: Cables
    protected string $cable_end;
    protected string $link_peers;
    protected string $link_peers_type;
    protected string $connected_endpoints;
    protected string $connected_endpoints_type;
    protected string $connected_endpoints_reachable;
    protected string $created;
    protected string $last_updated;
    protected string $_occupied;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'device', 'name'];
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
            'cable',
            'cable_end',
            'link_peers',
            'link_peers_type',
            'connected_endpoints',
            'connected_endpoints_type',
            'connected_endpoints_reachable',
            'last_updated',
            '_occupied'
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'type' => 'ConsolePortType', 'speed' => 'ConsoleSpeed' ];
    }

    use Validation\ConsoleSpeed;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device": 0,
  "module": 0,
  "name": "string",
  "label": "string",
  "type": "de-9",
  "speed": 1200,
  "description": "string",
  "mark_connected": true,
  "tags": [
    {
      "name": "string",
      "slug": "RhOO7nemI8PUihMMT8Ln37nY-QRDrg3XbVaKY0DqpAUuS4Q-ceYaiVoyXx-MDuCfQVLWYEgW22pqN5haRYt-dhr1NyB",
      "color": "ff098a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */