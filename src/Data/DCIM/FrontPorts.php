<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class FrontPorts extends Data_Core implements DataInterface
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
     * Physical label for port
     */
    protected string $label;

    /**
     * @var string $type
     * REQUIRED
     * ENUM
     */
    protected string $type;

    /**
     * @var string $color
     * Color code for port
     */
    protected string $color;

    /**
     * @var int $rear_port
     * REQUIRED
     * ID of RearPorts class
     */
    protected int $rear_port;

    /**
     * @var int $rear_port_position
     * Mapped position on corresponding rear port
     */
    protected int $rear_port_position;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var bool $mark_connected
     * Treat as if a cable is connected
     */
    protected bool $mark_connected; // Treat as if a cable is connected

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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'type'               => [ 'PortType' ],
            'name'               => [ 'MaxString', 64 ],
            'label'              => [ 'MaxString', 64 ],
            'color'              => [ 'MaxString', 6 ],
            'rear_port_position' => [ 'RangeInt', 1, 1024 ],
            'description'        => [ 'MaxString', 200 ],
        ];
    }

    use Validation\PortType;
    use Validation\MaxString;
    use Validation\RangeInt;
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