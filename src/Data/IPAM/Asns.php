<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Asns extends Data_Core implements DataInterface
{
    /**
     * @var int $asn
     * REQUIRED
     * 16- or 32-bit autonomous system number
     *
     */
    protected int $asn;

    /**
     * @var int $rir
     * ID of Rirs class
     */
    protected int $rir;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'asn'           => [ 'RangeInt', 1, 4294967295 ],
            'description'   => [ 'MaxString', 200 ]
        ];
    }

    use Validation\MaxString;
    use Validation\RangeInt;
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