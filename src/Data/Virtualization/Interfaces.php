<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Virtualization;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Interfaces extends Data_Core implements DataInterface
{
    protected int    $virtual_machine; // Class: Virtualization\VirtualMachines
    protected string $name; // Max: 64
    protected bool   $enabled;
    protected int    $parent; // Class: Virtualization\VirtualMachines
    protected int    $bridge;
    protected int    $mtu; // Max: 65536
    protected string $mac_address;
    protected string $description; // Max: 200
    protected string $mode;
    protected int    $untagged_vlan; // Class: Vlans
    protected string $tagged_vlans;
    protected int    $vrf; // Class: Vrfs
    protected int    $l2vpn_termination; // Class:

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
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'mode' => 'VMInterfaceMode' ];
    }

    use Validation\VMInterfaceMode;

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