<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class VlanGroups extends Data_Core implements DataInterface
{
    protected string $name; // Max: 100
    protected string $slug;
    protected string $scope_type;
    protected int    $scope_id;
    protected int    $min_vid; // Lowest permissible ID of a child VLAN. 1-4094
    protected int    $max_vid; // Highest permissible ID of a child VLAN. 1-4094
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
    protected string $created;
    protected string $last_modified;
    protected string $scope;
    protected int    $vlan_count;
    protected string $utilization;


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
            'scope',
            'vlan_count',
            'utilization'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [ 'slug' => ['Slug'] ];
    }

    use Validation\Slug;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string",
  "slug": "6v2PitM5ZOl8mPjhpXG1XbrG7cEtLOjQHpOIBI2czheROJ22eYXTWSI1EPrSw_7YWngwIBSNCJXLPPe8ETtHW-jaRCMaXXKlI5FT",
  "scope_type": "string",
  "scope_id": 0,
  "min_vid": 4094,
  "max_vid": 4094,
  "description": "string",
  "tags": [
    {
      "name": "string",
      "slug": "u9zvq97bArGlFZRyBf-pkTUY",
      "color": "e60067"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */