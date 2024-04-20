<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\CircuitStatus;

class Circuits extends Data_Core implements DataInterface
{
    protected string $cid; // Unique circuit ID. Max: 100
    protected int    $provider; // Class: Providers
    protected int    $provider_account; // Class;
    protected int    $type; // Class: CircuitTypes
    protected string $status;
    protected int    $tenant; // Class: Tenants
    protected string $install_date; // Date
    protected string $termination_date; // Date
    protected int    $commit_rate; // Commit rate (Kbps)
    protected string $description; // Max: 200
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */

     protected array $tags;
     protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int    $termination_a; // Class: CircuitTerminations
    protected int    $termination_z; // Class: CircuitTerminations



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'cid', 'provider', 'type' ];
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
            'termination_a',
            'termination_z'
        ];
    }



/* VALIDATE
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'status' => 'CircuitStatus' ];
    }

     use CircuitStatus;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "cid": "string",
  "provider": 0,
  "provider_account": 0,
  "type": 0,
  "status": "planned",
  "tenant": 0,
  "install_date": "2024-03-17",
  "termination_date": "2024-03-17",
  "commit_rate": 2147483647,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "cCzkOdbWHXVdk7_ndQFil",
      "color": "dbd2d1"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */