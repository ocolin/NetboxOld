<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class FrontPorts extends Data_Core implements DataInterface
{
    protected int    $device; // Class: Devices
    protected int    $module; // Class: Modules
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $type; 
    protected string $color; // Max: 6
    protected int    $rear_port; // Class; RearPorts
    protected int    $rear_port_position; // Mapped position on corresponding rear port
    protected string $description; // Max: 200
    protected bool   $mark_connected; // Treat as if a cable is connected

    /**
     * @var array<TagType> $tags
     */

    protected array $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected object $cable;
    protected string $cable_end;
    protected string $link_peers;
    protected string $link_peers_type;
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
        return [ 'name', 'type', 'device', 'rear_port' ];
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
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'type' => 'PortType' ];
    }

    use Validation\PortType;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device": 0,
  "module": 0,
  "name": "string",
  "label": "string",
  "type": "8p8c",
  "color": "92737b",
  "rear_port": 0,
  "rear_port_position": 1024,
  "description": "string",
  "mark_connected": true,
  "tags": [
    {
      "name": "string",
      "slug": "gyVyKkd58m9FI1gHS0NF2w42xhqy",
      "color": "055648"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */