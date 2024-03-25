<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Rirs extends Data_Core implements DataInterface
{
    protected string $name;
    protected string $slug;
    protected bool   $is_private; // IP space managed by this RIR is considered private
    protected string $description; // Max: 200

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


/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'slug' ];
    }



/*
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



/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 'slug' => 'Slug' ];
    }

    use Validation\Slug;

}


/*
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