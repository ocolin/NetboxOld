<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;


class ConfigContexts extends Data_Core implements DataInterface
{ 
    protected string $name;
    protected int    $weight;
    protected string $description; // Max: 200
    protected bool   $is_active;

    /**
     * @var array<int> 
     */
    protected array $regions;

    /**
     * @var array<int> 
     */
    protected array $site_groups;

    /**
     * @var array<int> 
     */
    protected array $sites;

    /**
     * @var array<int> 
     */
    protected array $locations;

    /**
     * @var array<int> 
     */
    protected array $device_types;

    /**
     * @var array<int> 
     */
    protected array $roles;

    /**
     * @var array<int> 
     */
    protected array $platforms;

    /**
     * @var array<int> 
     */
    protected array $cluster_types;

    /**
     * @var array<int> 
     */
    protected array $cluster_groups;

    /**
     * @var array<int> 
     */
    protected array $clusters;

    /**
     * @var array<int> 
     */
    protected array $tenant_groups;

    /**
     * @var array<int> 
     */
    protected array $tenants;

    /**
     * @var array<string> 
     */
    protected array  $tags;
    protected int    $data_source;

    /**
     * @var array<string, string> 
     */
    protected array  $data;


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $data_path; // Path to remote file (relative to data source root)
    protected int    $data_file;


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

}

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