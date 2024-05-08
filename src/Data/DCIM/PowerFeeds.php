<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerFeeds extends Data_Core implements DataInterface
{
    /**
     * @var int $power_panel
     * REQUIRED
     * ID of PowerPanel class
     */
    protected int $power_panel;

    /**
     * @var int $rack
     * ID or Racks class
     */
    protected int $rack;

    /**
     * @var string $name
     * REQUIRED
     * Name of power feed
     */
    protected string $name;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var string $type
     * ENUM
     */
    protected string $type;

    /**
     * @var string $supply
     * ENUM
     */
    protected string $supply;

    /**
     * @var string $phase
     * ENUM - single-phase or three-phase
     */
    protected string $phase;

    /**
     * @var int $voltage
     * How many volts of power
     */
    protected int $voltage;

    /**
     * @var int $amperage
     * Amperage provided by feed
     */
    protected int $amperage;

    /**
     * @var int $max_utilization
     * Maximum permissible draw (percentage)
     */
    protected int $max_utilization;

    /**
     * @var bool $mark_connected
     * Treat as if a cable is connected
     */
    protected bool $mark_connected;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int    $tenant;
    protected string $comments;

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
        return [ 'name', 'power_panel' ];
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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'name'            => [ 'MaxString', 100 ],
            'status'          => [ 'Status' ],
            'type'            => [ 'FeedType' ],
            'supply'          => [ 'Supply' ],
            'phase'           => [ 'PowerPhase' ],
            'voltage'         => [ 'RangeInt', -32768, 32767 ],
            'amperage'        => [ 'MaxInt', 32767 ],
            'max_utilization' => [ 'RangeInt', 1, 100 ],
            'description'     => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Status;
    use Validation\FeedType;
    use Validation\PowerSupply;
    use Validation\PowerPhase;
    use Validation\MaxString;
    use Validation\RangeInt;
    use Validation\MaxInt;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "power_panel": 0,
  "rack": 0,
  "name": "string",
  "status": "offline",
  "type": "primary",
  "supply": "ac",
  "phase": "single-phase",
  "voltage": 32767,
  "amperage": 32767,
  "max_utilization": 100,
  "mark_connected": true,
  "description": "string",
  "tenant": 0,
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "agU5A2dxrNbVw3Ag1sjCHCPfk_s-sN69we8yHLHR4JhtZcx7u--4D17IeJlK_",
      "color": "bfdb21"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */