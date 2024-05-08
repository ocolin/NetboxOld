<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class ConfigContexts extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of config
     */
    protected string $name;

    /**
     * @var int $weight
     */
    protected int $weight;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var bool $is_active
     * Is config active?
     */
    protected bool $is_active;

    /**
     * @var array<int> $regions
     * List of Region IDs
     */
    protected array $regions;

    /**
     * @var array<int> $site_groups
     * List of Site Groups IDs
     */
    protected array $site_groups;

    /**
     * @var array<int> $sites
     * List of Sites IDs
     */
    protected array $sites;

    /**
     * @var array<int> $locations
     * List of Locations IDs
     */
    protected array $locations;

    /**
     * @var array<int> $device_types
     * List of DeviceTypes IDs
     */
    protected array $device_types;

    /**
     * @var array<int> $roles
     * List of Roles IDs
     */
    protected array $roles;

    /**
     * @var array<int> $platforms
     * List of Platforms IDs
     */
    protected array $platforms;

    /**
     * @var array<int> $cluster_types
     * List of ClusterTypes IDs
     */
    protected array $cluster_types;

    /**
     * @var array<int> $cluster_groups
     * List of ClusterGroups IDs
     */
    protected array $cluster_groups;

    /**
     * @var array<int> $clusters
     * List of Clusters IDs
     */
    protected array $clusters;

    /**
     * @var array<int> $tenant_groups
     * List of TenantGroups IDs
     */
    protected array $tenant_groups;

    /**
     * @var array<int> $tenants
     * List of Tenants IDs
     */
    protected array $tenants;

    /**
     * @var array<string> $tags
     * List of Tags IDs
     *
     */
    protected array  $tags;

    /**
     * @var int $data_source
     * ID of data source object
     */
    protected int $data_source;

    /**
     * @var array<string, string> $data
     * REQUIRED
     */
    protected array $data;


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $data_path; // Path to remote file (relative to data source root)
    protected int    $data_file;
    protected string $data_synced;



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'data' ];
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
            'data_path',
            'data_file'
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
            'name'        => [ 'MaxString', 100 ],
            'weight'      => [ 'RangeInt', 0, 32767 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\MaxString;
    use Validation\RangeInt;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "weight": 32767,
  "description": "string",
  "is_active": true,
  "regions": [
    0
  ],
  "site_groups": [
    0
  ],
  "sites": [
    0
  ],
  "locations": [
    0
  ],
  "device_types": [
    0
  ],
  "roles": [
    0
  ],
  "platforms": [
    0
  ],
  "cluster_types": [
    0
  ],
  "cluster_groups": [
    0
  ],
  "clusters": [
    0
  ],
  "tenant_groups": [
    0
  ],
  "tenants": [
    0
  ],
  "tags": [
    "string"
  ],
  "data_source": 0,
  "data": "string"
}
 */