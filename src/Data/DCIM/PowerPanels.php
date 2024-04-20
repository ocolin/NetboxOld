<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class PowerPanels extends Data_Core implements DataInterface
{
    protected int    $site;
    protected int    $location;
    protected int    $powerfeed_count;
    protected string $name;
    protected string $description;
    protected string $comment;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;

    /**
     * @var array<TagType>
     */
    
    protected array  $tags;
    
    protected object $custom_fields;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'site' ];
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
            'location',
            'powerfeed_count'
        ];
    }
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "site": 0,
  "location": 0,
  "name": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "8oJ0K429jUXL3GuMdbY5C4aVrLGM0GS3c_",
      "color": "704fd5"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */