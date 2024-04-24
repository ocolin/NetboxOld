<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class VirtualChassis extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     * Name of virtual chassis
     */
    protected string $name;

    /**
     * @var string $domain
     * DNS domain name
     */
    protected string $domain;

    /**
     * @var int $master
     * ID of master VC if there is one
     */
    protected int $master;

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
    protected int    $member_count;
    protected string $url;
    protected string $display;


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
            'member_count'
        ];
    }

    
/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [
            'status'      => ['Status'],
            'name'        => [ 'MaxString', 64 ],
            'domain'      => [ 'MaxString', 30 ],
            'description' => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Status;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "domain": "string",
  "master": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "Ue2cH45r8GZI8V040mjo9AhBjOFoHZZaIX6DW04mp8e0VFOfKY_0CM4",
      "color": "461c05"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */