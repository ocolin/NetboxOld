<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class FhrpGroupAssignments extends Data_Core implements DataInterface
{
    protected int    $group; // Class: FhrpGroyps
    protected string $interface_type;
    protected int    $interface_id;
    protected int    $priority;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_modified;
    protected string $interface;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 
            'group', 
            'interface_type', 
            'interface_id', 
            'priority' 
        ];
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
        ];
    }
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "group": 0,
  "interface_type": "string",
  "interface_id": 9223372036854776000,
  "priority": 255
}
 */