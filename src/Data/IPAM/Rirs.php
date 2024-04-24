<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Rirs extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var string $slug
     * REQUIRED
     */
    protected string $slug;

    /**
     * @var bool $is_private
     * IP space managed by this RIR is considered private
     */
    protected bool $is_private;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var array<TagType> $tags
     */
    protected array  $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected int    $aggregate_count;


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
            'last_modified',
            'aggregate_count'
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
            'slug'         => [ 'Slug', 100 ],
            'name'         => [ 'MaxString', 100 ],
            'description'  => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Slug;
    use Validation\MaxString;

}


/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "slug": "9lrY1nuOxbsKWG-fxPLApZ-AcxOfSkQPpFdb2lgrLz0mznlG7KwQpEPn9TFSvbvTgjTRe",
  "is_private": true,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "tcDxPVCqLWbQfgVMoNyf9DqqlriJ-vEk7j7QVQ8K2osw0SnQ-3jHSVoONmw_rd0nApBfWL58vbNvjbPCEuj33a0seBgc_UM3CuW",
      "color": "f6640a"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */