<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\MaxString;

class Providers extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * Full name of the provider
     */
    protected string $name;

    /**
     * @var string $slug
     */
    protected string $slug;

    /**
     * @var array<int> $accounts
     */
    protected array $accounts;

    /**
     * @var string $description
     */
    protected string $description;

    /**
     * @var string $comments
     */
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



/* VALIDATE
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>
     */

    public static function validate() : array
    {
        return [
            'name'        => [ 'MaxString', 100 ],
            'slug'        => [ 'MaxString', 100 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use MaxString;
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