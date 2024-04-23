<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\TerminalSide;

class CircuitTerminations extends Data_Core implements DataInterface
{
    protected int    $circuit; // Class: Circuits
    protected string $term_side;
    protected int    $site; // Class: Sites
    protected int    $provider_network; // Class ProviderNetworks
    protected int    $port_speed; // Port speed (Kbps)
    protected int    $upstream_speed; // Upstream speed (Kbps)
    protected string $xconnect_id; //ID of the local cross-connect
    protected string $pp_info; // Patch panel ID and port number(s)
    protected string $description; // Max: 200
    protected bool   $mark_connected; // Treat as if a cable is connected

    /**
     * @var array<TagType> $tags
     */

     protected array  $tags;
     protected object $custom_fields;

     // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int    $cable;
    protected string $cable_end;
    protected string $link_peers;
    protected string $link_peers_type;
    protected string $_occupied;



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'circuit', 'term_side' ];
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
            '_occupied'
        ];
    }


/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate() : array
    {
        return [
            'term_side' => ['TerminalSide']
        ];
    }

use TerminalSide;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
[
  {
    "circuit": {
      "cid": "string"
    },
    "term_side": "A",
    "site": {
      "name": "string",
      "slug": "vLwGr0ievHMUasSgjlt8LO0JfRUpG"
    },
    "provider_network": {
      "name": "string"
    },
    "port_speed": 2147483647,
    "upstream_speed": 2147483647,
    "xconnect_id": "string",
    "pp_info": "string",
    "description": "string",
    "mark_connected": true,
    "tags": [
      {
        "name": "string",
        "slug": "lrkSozWJMKM4B3trhn",
        "color": "cae05f"
      }
    ],
    "custom_fields": {
      "additionalProp1": "string",
      "additionalProp2": "string",
      "additionalProp3": "string"
    }
  }
]
 */