<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Types\TerminationType;
use Cruzio\lib\Netbox\Validation;

class Cables extends Data_Core implements DataInterface
{ 
    protected string $type;    

    /**
     * @var array<TerminationType> $a_terminations
     */

    protected array  $a_terminations; 

    /**
     * @var array<TerminationType> $b_terminations
     */
    
    protected array  $b_terminations; 
    protected string $status;
    protected int    $tenant; // Class: Tenants;
    protected string $label; // Max: 100
    protected string $color; // Max: 6
    protected float  $length;
    protected string $length_unit;
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
    protected string $last_updated;


/* 
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [];
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
        ];
    }


/* 
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [
            'type'        => 'CableType',
            'status'      => 'CableStatus',
            'length_unit' => 'LengthUnit'
        ];
    }

    use Validation\CableStatus;
    use Validation\LengthUnit;
    use Validation\CableType;
}

/**
{
  "type": "cat3",
  "a_terminations": [
    {
      "object_type": "string",
      "object_id": 0
    }
  ],
  "b_terminations": [
    {
      "object_type": "string",
      "object_id": 0
    }
  ],
  "status": "connected",
  "tenant": 0,
  "label": "string",
  "color": "6e39b5",
  "length": 999999,
  "length_unit": "km",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "cwupdnyvsdVGrmR3R2V4FyrKsy07FFWkZjLh",
      "color": "892405"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */