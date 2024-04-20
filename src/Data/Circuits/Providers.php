<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class Providers extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug; // Max: 100

    /**
     * @var array<int> $accounts
     */

    protected array $accounts;
    protected string $description; // Max: 200
    protected string $comments;

    /**
     * @var array<int> $asns
     */

    protected array $asns;

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
    protected int    $circuit_count;




/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'slug' ];
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
            'circuit_count'
        ];
    }
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "slug": "IzRu_hxg7DaRGEgBsDfrs-HETSzFSaczO3rG7TqxIh4__5Ed_o7wdT3CSf_",
  "accounts": [
    0
  ],
  "description": "string",
  "comments": "string",
  "asns": [
    0
  ],
  "tags": [
    {
      "name": "string",
      "slug": "baGocVVI_CJNckfPhhEmSqPuF7OOmdEcMk50vPxyeO71I_cEPcCF1dH-ordi8RsSsb5g5A",
      "color": "4ffc97"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */