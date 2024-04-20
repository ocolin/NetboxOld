<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class IpRanges extends Data_Core implements DataInterface
{
    protected string $start_address;
    protected string $end_address;
    protected int    $vrf; // Class: Vrfs
    protected int    $tenant;
    protected string $status;
    protected int    $role; // Class: Roles
    protected string $description;
    protected string $comments;

    /**
     * @var array<TagType>
     */
    protected array  $tags;
    protected object $custom_fields;
    protected bool   $mark_utilized;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $create;
    protected string $last_modified;
    protected string $family;
    protected int    $size;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

    public static function required() : array
    {
        return [
            'start_address',
            'end_address'
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
            'family',
            'size'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    public static function validate() : array
    {
        return [
            'start_address' => 'CIDR',
            'end_address'   => 'CIDR',
            'status'        => 'IpRangeStatus'
        ];
    }

    use Validation\CIDR;
    use Validation\IpRangeStatus;
}


/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 {
  "start_address": "string",
  "end_address": "string",
  "vrf": 0,
  "tenant": 0,
  "status": "active",
  "role": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "noxAKko33iXZjGBG7FydEiZZ49_gAc3f1xf5d9L_M0mxwJ1g6fBEP3KS1SImHpy",
      "color": "7ccccf"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  },
  "mark_utilized": true
}
 */