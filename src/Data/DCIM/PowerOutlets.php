<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerOutletTemplates extends Data_Core implements DataInterface
{
    protected int    $device; // CLass: Devices
    protected int    $module; // Class: Modules
    protected string $name; // Max: 64
    protected string $label; // Max: 64
    protected string $type; 
    protected int    $power_port; // Class: PowerPorts
    protected string $feed_leg;
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
    protected int    $cable;
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
            'cable',
            'cable_end',
            'link_peers',
            'link_peers_type',
            'connected_endpoints',
            'connected_endpoints_type',
            'connected_endpoints_reachable',
            '_occupied'
        ];
    }



/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'type' => 'PowerOutletType', 'feed_leg' => 'PowerFeedLeg' ];
    }

    use Validation\PowerOutletType;
    use Validation\PowerFeedLeg;

}

/**
{
  "device": 0,
  "module": 0,
  "name": "string",
  "label": "string",
  "type": "iec-60320-c5",
  "power_port": 0,
  "feed_leg": "A",
  "description": "string",
  "mark_connected": true,
  "tags": [
    {
      "name": "string",
      "slug": "lvy5z",
      "color": "8168e7"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */