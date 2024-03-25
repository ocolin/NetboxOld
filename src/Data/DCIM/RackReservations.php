<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class RackReservations extends Data_Core implements DataInterface
{
    protected int    $rack; // Class: Racks

    /**
     * @var array<int> $units
     */

    protected array  $units; 
    protected int    $user; // Class: Users
    protected int    $tenant; // Class: Tenants
    protected string $description; // Max: 200
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */

    protected array  $tags;
    protected string $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'rack', 'units', 'user' ];
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
        ];
    }

}

/**
{
  "rack": 0,
  "units": [
    32767
  ],
  "user": 0,
  "tenant": 0,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "vbt2CFpI2RMS48X6dNfsGd-xChQ9PqzIcMBEWOLMZjJTXGFIltv7KH8jXen8Bq0saVCNKN0sqygS07zQXt",
      "color": "21cddc"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */