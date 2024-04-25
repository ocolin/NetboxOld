<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerPorts extends Data_Core implements DataInterface
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
     *
     */
    protected string $name;

    /**
     * @var string $label
     * Physical label
     */
    protected string $label;

    /**
     * @var string $type
     * ENUM
     */
    protected string $type;

    /**
     * @var int $maximum_draw
     * Maximum power draw (watts)
     */
    protected int $maximum_draw;

    /**
     * @var int $allocated_draw
     * Allocated power draw (watts)
     */
    protected int $allocated_draw;

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
    protected string $created;
    protected string $last_updated;
    protected string $cable_end;
    protected string $link_peers;
    protected string $link_peers_type;
    protected string $connected_endpoints;
    protected string $connected_endpoints_type;
    protected string $connected_endpoints_reachable;
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


/*  VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'type'           => [ 'PowerPortType' ],
            'name'           => [ 'MaxString', 64 ],
            'label'          => [ 'MaxString', 64 ],
            'maximum_draw'   => [ 'RangeInt', 1, 2147483647 ],
            'allocated_draw' => [ 'RangeInt', 1, 2147483647 ],
            'description'    => [ 'MaxString', 200 ],
        ];
    }

    use Validation\PowerPortType;
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
  "type": "iec-60320-c6",
  "maximum_draw": 2147483647,
  "allocated_draw": 2147483647,
  "description": "string",
  "mark_connected": true,
  "tags": [
    {
      "name": "string",
      "slug": "b-y2wP-uhBOgEmLz9S1qw-5vrSKZYowsronxN0Ap4Q0V3ThVwzV6",
      "color": "515afc"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */