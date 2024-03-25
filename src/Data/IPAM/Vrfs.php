<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class Vrfs extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $rd; // Unique route distinguisher (as defined in RFC 4364)
    protected int    $tenant; // Class: Tenancy\Tenants
    protected bool   $enforce_unique; // Prevent duplicate prefixes/IP addresses within this VRF
    protected string $description; // Max: 200
    protected string $comments;

    /**
     * @var array<int> $import_targets
     */
    protected array $import_targets;

    /**
     * @var array<int> $export_targets
     */
    protected array $export_targets;

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
    protected string $last_modified;
    protected int    $ipaddress_count; 
    protected int    $prefix_count;



/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name' ];
    }


/*
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
            'ipaddress_count',
            'prefix_count'
        ];
    }

}

/**
{
  "name": "string",
  "rd": "string",
  "tenant": 0,
  "enforce_unique": true,
  "description": "string",
  "comments": "string",
  "import_targets": [
    0
  ],
  "export_targets": [
    0
  ],
  "tags": [
    {
      "name": "string",
      "slug": "dV8zUhOaVg6iUEf2d0zXGHUGVh1JMrSiharJZuu7DSx8m35KuF9gIbTRDsQIbxwwd7k1_D",
      "color": "8a7906"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */