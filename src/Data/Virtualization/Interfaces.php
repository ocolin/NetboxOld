<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Virtualization;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Interfaces extends Data_Core implements DataInterface
{
    /**
     * @var int $virtual_machine
     * REQUIRED
     * ID of VirtualMachines class
     */
    protected int $virtual_machine;

    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var bool $enabled
     * Is interface enabled?
     */
    protected bool $enabled;

    /**
     * @var int $parent
     * ID of parent class object
     */
    protected int $parent;

    /**
     * @var int $bridge
     * ID of Bridges class
     */
    protected int $bridge;

    /**
     * @var int $mtu
     * Maximum Transmission Unit
     */
    protected int $mtu;

    /**
     * @var string $mac_address
     * MAC Address
     */
    protected string $mac_address;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var string $mode
     * ENUM
     */
    protected string $mode;

    /**
     * @var int $untagged_vlan
     * ID of Vlans class
     */
    protected int $untagged_vlan;

    /**
     * @var array<int> $tagged_vlans
     * List of tagged Vlans IDs
     */
    protected array $tagged_vlans;

    /**
     * @var int $vrf
     * ID of Vrfs class
     */
    protected int $vrf;

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
    protected int    $count_ipaddresses;
    protected int    $count_fhrp_groups;
    protected int $l2vpn_termination;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'virtual_machine', 'name' ];
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
            'count_ipaddresses',
            'count_fhrp_groups'
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
            'mode'          => [ 'VMInterfaceMode' ],
            'name'          => [ 'MaxString', 64 ],
            'mtu'           => [ 'RangeInt', 1, 65536 ],
            'mac_address'   => [ 'MacAddress' ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\VMInterfaceMode;
    use Validation\MaxString;
    use Validation\RangeInt;
    use Validation\MacAddress;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "virtual_machine": 0,
  "name": "string",
  "enabled": true,
  "parent": 0,
  "bridge": 0,
  "mtu": 65536,
  "mac_address": "string",
  "description": "string",
  "mode": "access",
  "untagged_vlan": 0,
  "tagged_vlans": [
    0
  ],
  "vrf": 0,
  "tags": [
    {
      "name": "string",
      "slug": "Fu8GPQnCHjQfR189R9XTK0Z63kQ6N-Aron1epRHaG18wBCY_iL2bvL3Ajx0UkyCdyKjfC4tz",
      "color": "c4f00e"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */