<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class Asns extends Data_Core implements DataInterface
{
    protected int    $asn;
    protected int    $rir; // Class: IPAM/Rirs
    protected int    $tenant; // Class: Tenancy/Tenants
    protected string $description; // Max: 200
    protected string $comments;

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
    protected int    $site_count;
    protected int    $provider_count;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'asn', 'rir' ];
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
            'site_count',
            'provider_count',
        ];
    }
}

/**
{
  "asn": 4294967295,
  "rir": 0,
  "tenant": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "I84LBGgstwKQwtWx5ELMor9B6SiQGld55Vgi02vYHxo6P5GaArv5L8w1I1gKcsFN",
      "color": "7e1bbb"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */