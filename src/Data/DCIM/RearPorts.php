<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class RearPorts extends Data_Core implements DataInterface
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
     * Physical label
     */
    protected string $label;

    /**
     * @var string $type
     * REQUIRED
     * Choose from list of port types
     */
    protected string $type;

    /**
     * @var string $color
     * Color code for port
     */
    protected string $color;

    /**
     * @var int $positions
     * Number of front ports which may be mapped
     */
    protected int $positions;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var bool $mark_connected
     * Treat as if a cable is connected
     */
    protected bool $mark_connected;
    protected object $custom_fields;

    /**
     *  @var array<TagType> $tags
     */
    protected array $tags;

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
        return [ 'name', 'type', 'device' ];
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
            'type'          => ['PortType'],
            'name'          => [ 'MaxString', 64 ],
            'label'         => [ 'MaxString', 64 ],
            'color'         => [ 'MaxString', 6 ],
            'description'   => [ 'MaxString', 200 ],
            'positions'     => [ 'RangeInt', 1, 1024 ],
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
  "color": "8aa552",
  "positions": 1024,
  "description": "string",
  "mark_connected": true,
  "tags": [
    {
      "name": "string",
      "slug": "GtHVVSWmac",
      "color": "47c128"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */