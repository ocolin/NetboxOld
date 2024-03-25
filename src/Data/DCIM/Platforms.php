<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Platforms extends Data_Core implements DataInterface
{

    protected int     $manufacturer;
    protected int     $config_template;
    protected string  $url;
    protected string  $display;
    protected string  $name;
    protected string  $slug;
    protected string  $napalm_driver;
    protected ?string $napalm_args;
    protected string  $description;

    /**
     * @var array<TagType>
     */
    
    protected array   $tags;
    protected object  $custom_fields;

    // READ ONLY
    protected int     $id;
    protected int     $device_count;
    protected int     $virtualmachine_count;
    protected string  $created;
    protected string  $last_updated;



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
            'device_count', 
            'virtualmachine_count'
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

/**
 {
  "name": "string",
  "slug": "OZJC5YdJph2P9_jI46aXRmXxrSj5Y1H970tF",
  "manufacturer": 0,
  "config_template": 0,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "-01j6CStYocVMUyFucV6yXh8",
      "color": "af9264"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */