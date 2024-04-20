<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerFeeds extends Data_Core implements DataInterface
{
    protected int    $power_panel; // Class: PowerPanel
    protected string $name; // Max: 100
    protected string $status;
    protected string $type;
    protected string $supply;
    protected string $phase;
    protected int    $voltage; // Min: -32768 Max: 32767
    protected int    $amperage; // Max: 32767
    protected int    $max_utilization; // Maximum permissible draw (percentage)
    protected bool   $mark_connected; // Treat as if a cable is connected
    protected string $description; // Max: 200
    protected int    $tenant;
    protected string $comments;
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
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 
            'status' => 'Status', 
            'type'   => 'FeedType' ,
            'supply' => 'Supply',
            'phase'  => 'PowerPhase'
        ];
    }

    use Validation\Status;
    use Validation\FeedType;
    use Validation\PowerSupply;
    use Validation\PowerPhase;

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