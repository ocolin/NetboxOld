<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Virtualization;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class VirtualMachines extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var int $site
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $cluster
     * ID of Clusters class
     */
    protected int $cluster;

    /**
     * @var int $device
     * ID of Devices class
     */
    protected int $device;

    /**
     * @var int $role
     * ID of Roles class
     */
    protected int $role;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var int $platform
     * ID of Platforms class
     */
    protected int $platform;

    /**
     * @var int $primary_ip4
     * ID of IpAddresses class
     */
    protected int $primary_ip4;

    /**
     * @var int $primary_ip6
     * ID of IpAddresses class
     */
    protected int $primary_ip6;

    /**
     * @var float $vcpus
     * Virtual CPUs
     */
    protected float $vcpus;

    /**
     * @var int $memory
     * Memory (MB)
     */
    protected int $memory;

    /**
     * @var int $disk
     * Disk space (GB)
     */
    protected int $disk;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var string $comments
     */
    protected string $comments;

    /**
     * @var int $config_template
     * ID of ConfigTemplates class
     */
    protected int $config_template;

    /**
     * @var string $local_context_data
     * Local config context data takes precedence over
     * source contexts in the final rendered config context
     */
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
 *  @return array<string, array<string|int|float>>
 */

    public static function validate() : array
    {
        return [
            'status'        => [ 'VMStatus' ],
            'name'          => [ 'MaxString', 64 ],
            'vcpus'         => [ 'MinNumber', 0.01 ],
            'memory'        => [ 'RangeInt', 0, 2147483647 ],
            'disk'          => [ 'RangeInt', 0, 2147483647 ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\VMStatus;
    use Validation\MaxString;
    use Validation\RangeInt;
    use Validation\MinNumber;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
 * {
 *  "name": "string",
 *  "status": "offline",
 *  "site": 0,
 *  "cluster": 0,
 *  "device": 0,
 *  "role": 0,
 *  "tenant": 0,
 *  "platform": 0,
 *  "primary_ip4": 0,
 *  "primary_ip6": 0,
 *  "vcpus": 9999,
 *  "memory": 2147483647,
 *  "disk": 2147483647,
 *  "description": "string",
 *  "comments": "string",
 *  "config_template": 0,
 *  "local_context_data": "string",
 *  "tags": [
 *      {
 *          "name": "string",
 *          "slug": "RXkoNcBO2rRAfuQsyfSqlcEseC",
 *          "color": "c1c299"
 *      }
 *  ],
 *  "custom_fields": {
 *  "additionalProp1": "string",
 *  "additionalProp2": "string",
 *  "additionalProp3": "string"
 *  }
 * }
 */