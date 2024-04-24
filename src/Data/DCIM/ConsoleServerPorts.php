<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ConsoleServerPorts extends Data_Core implements DataInterface
{
    /**
     * @var int $device
     * REQUIRED
     * ID of Devices class
     */
    protected int $device;

    /**
     * @var int $module
     * ID of Modules class
     */
    protected int $module;

    /**
     * @var string $name
     * REQUIRED
     * Name of port
     */
    protected string $name;

    /**
     * @var string $label
     * Physical label of port
     */
    protected string $label;

    /**
     * @var string $type
     * Choose from list of types
     */
    protected string $type;

    /**
     * @var int $speed
     * Choose from list of speed integers
     */
    protected int    $speed;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var bool $mark_connected
     * Treat as if a cable is connected
     */
    protected bool   $mark_connected;

    protected object $custom_fields;

    /// READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected object $cable;
    protected string $cable_end;
    protected string $link_peers;
    protected string $link_peers_type;
    protected string $connected_endpoints;
    protected string $connected_endpoints_type;
    protected string $connected_endpoints_reachable;
    protected string $created;
    protected string $last_updated;
    protected string $_occupied;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;


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
            'last_modified',
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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'type'        => ['ConsolePortType'],
            'speed'       => ['ConsoleSpeed' ],
            'name'        => [ 'MaxString', 64 ],
            'label'       => [ 'MaxString', 64 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\ConsoleSpeed;
    use Validation\ConsolePortType;
    use Validation\MaxString;

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
      "slug": "P-YlXSuSVvYIWOw2t4BFSNV1OOQJPDfOd5q3nTUmFSp-4hp-UB4jDRvzH-swe9wdbRH",
      "color": "f6cbd6"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */