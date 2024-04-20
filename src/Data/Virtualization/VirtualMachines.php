<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Virtualization;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class VirtualMachines extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $status;
    protected int    $site; // Class: DCIM\Sites
    protected int    $cluster; // Class: Clusters
    protected int    $device; // Class: Devices
    protected int    $role; // Class: Role
    protected int    $tenant; // Class: Tenancy\Tenants
    protected int    $platform; // Class: Platforms
    protected int    $primary_ip4;
    protected int    $primary_ip6;
    protected float  $vcpus;
    protected int    $memory; // Memory (MB)
    protected int    $disk; // Disk (GB)
    protected string $description; // Max: 200
    protected string $comments;
    protected int    $config_template;
    protected string $local_context_data;

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
    protected int    $primary_ip;
    protected string $config_context;
    protected int    $interface_count;
    protected int    $virtual_disk_count;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name' ];
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
            'primary_ip',
            'config_context',
            'interface_count',
            'virtual_disk_count'
        ];
    }


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'status' => 'VMStatus' ];
    }

    use Validation\VMStatus;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "type": 0,
  "group": 0,
  "status": "planned",
  "tenant": 0,
  "site": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "DNDny6dN2XwoB6E3nYwUOJP4VdDa6JnKiZrHM0exHxHDMZbjhNmvgtX521Wd2dhYekgGQiQ3wqcnd1J5JDBsOeysKV7NGz6v",
      "color": "b7b3bc"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */