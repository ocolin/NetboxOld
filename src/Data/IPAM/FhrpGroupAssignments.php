<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class FhrpGroupAssignments extends Data_Core implements DataInterface
{
    /**
     * @var int $group
     * REQUIRED
     * ID of FhrpGroups class
     */
    protected int $group;

    /**
     * @var string $interface_type
     * REQUIRED
     */
    protected string $interface_type;

    /**
     * @var int $interface_id
     * REQUIRED
     */
    protected int $interface_id;

    /**
     * @var int $priority
     * REQUIRED
     */
    protected int $priority;

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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'interface_id'  => [ 'RangeInt', 0, 9223372036854775807 ],
            'priority'      => [ 'RangeInt', 0, 255 ],
        ];
    }

    use Validation\RangeInt;
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