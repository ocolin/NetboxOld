<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class IpAddresses extends Data_Core implements DataInterface
{
    /**
     * @var string $address
     * REQUIRED
     */
    protected string $address;

    /**
     * @var int $vrf
     * ID of Vrfs class
     */
    protected int $vrf;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var string $role
     * ENUM
     */
    protected string $role;

    /**
     * @var string $assigned_object_type
     */
    protected string $assigned_object_type;

    /**
     * @var int $assigned_object_id
     * Assigned object id
     */
    protected int $assigned_object_id;

    /**
     * @var int $nat_inside
     * ID of NAT inside object
     */
    protected int $nat_inside;

    /**
     * @var string $dns_name
     * Hostname or FQDN (not case-sensitive)
     */
    protected string $dns_name;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string  $comment;

    /**
     * @var array<TagType>
     */
    protected array   $tags;
    protected object  $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $family;
    protected string $create;
    protected string $last_modified;
    protected string $assigned_object;
    protected string $nat_outside;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'address' ];
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
            'family',
            'assigned_object',
            'nat_outside'
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
            'address'               => [ 'CIDR' ],
            'status'                => [ 'IpStatus' ],
            'role'                  => [ 'IpRole' ],
            'assigned_object_id'    => [ 'RangeInt', 0, 9223372036854775807 ],
            'dns_name'              => [ 'MaxString', 255 ],
            'description'           => [ 'MaxString', 200 ],
        ];
    }

    use Validation\CIDR;
    use Validation\IpStatus;
    use Validation\IpRole;
    use Validation\RangeInt;
    use Validation\MaxString;

}


/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "address": "string",
  "vrf": 0,
  "tenant": 0,
  "status": "active",
  "role": "loopback",
  "assigned_object_type": "string",
  "assigned_object_id": 9223372036854776000,
  "nat_inside": 0,
  "dns_name": "GSPC_3Qo5wAgWa44SVa5yTb_oQcnz5z9VTvUastaxrFaTDcssHZPu28pdN3Q8z.Il8qf3mBRaOhOIiHXP7j.9EVtyLWkHGn0UWTSXJQx3o7SZ-TftulbQwbt.Rc.s4dhKBT5oTNPNhUnsPaDIylXE7W9EkvqNuGOB2SrYR_qxXkNyuQYT0svpVngD3-3G8gR4eygbGcOc63dONS.72BnTFvVW8.BgGkCzqfyxIZP6XMEBgmBT1zXMrGjqKEYMow",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "yUv1fAIyP",
      "color": "7aa7bc"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */