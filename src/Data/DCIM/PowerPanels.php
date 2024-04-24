<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class PowerPanels extends Data_Core implements DataInterface
{
    /**
     * @var int $site
     * REQUIRED
     * ID of Sites class
     */
    protected int $site;

    /**
     * @var int $location
     * ID of Locations class
     */
    protected int $location;

    /**
     * @var string $name
     * REQUIRED
     * Name of power panel
     */
    protected string $name;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $comment;

    /**
     * @var array<TagType>
     */
    protected array  $tags;
    protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int $powerfeed_count;



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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'name'        => [ 'MaxString', 64 ],
            'description' => [ 'MaxString', 200 ],

            'type'        => [ 'PowerOutletType' ],
            'feed_leg'    => [ 'PowerFeedLeg' ],

            'label'       => [ 'MaxString', 64 ],

        ];
    }

    use Validation\PowerOutletType;
    use Validation\PowerFeedLeg;
    use Validation\MaxString;

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