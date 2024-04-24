<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\TerminalSide;

class CircuitTerminations extends Data_Core implements DataInterface
{
    /**
     * @var int $circuit
     * ID of Circuit class
     */
    protected int $circuit;
    protected string $term_side;

    /**
     * @var int $site
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $provider_network
     * ID of ProviderNetworks class
     */
    protected int $provider_network;

    /**
     * @var int $port_speed
     * Physical circuit speed in Kbps
     */
    protected int $port_speed;

    /**
     * @var int $upstream_speed
     * Upstream speed, if different from port speed in Kbps
     */
    protected int $upstream_speed;

    /**
     * @var string $xconnect_id
     * ID of the local cross-connect
     */
    protected string $xconnect_id;

    /**
     * @var string $pp_info
     * Patch panel ID and port number(s)
     */
    protected string $pp_info;
    protected string $description; // Max: 200

    /**
     * @var bool $mark_connected
     * Treat as if a cable is connected
     */
    protected bool $mark_connected;

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

    /**
     * @return array<string, array<string|int>
     */

    public static function validate() : array
    {
        return [
            'term_side'      => [ 'TerminalSide' ],
            'port_speed'     => [ 'RangeInt', 0, 2147483647 ],
            'upstream_speed' => [ 'RangeInt', 0, 2147483647 ],
            'xconnect_id'    => [ 'MaxString', 50 ],
            'pp_info'        => [ 'MaxString', 100 ],
            'description'    => [ 'MaxString', 200 ]
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