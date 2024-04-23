<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class InterfaceTemplates extends Data_Core implements DataInterface
{
    
    protected int    $site;
    protected int    $device_type;
    protected int    $module_type;
    protected int    $bridge;

    protected string $name;
    protected string $label;
    protected string $description;
    protected string $type;
    protected string $poe_mode;
    protected string $poe_type;
    protected string $rf_role;
    protected bool   $enabled;
    protected bool   $mgmt_only;

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


/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'type' ];
    }


/* VALIDATE PARAMETERS
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


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, array<string>>
 */

    public static function validate() : array
    {
        return [ 'type' => ['InterfaceType']];
    }

    use Validation\InterfaceType;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "device_type": 0,
  "module_type": 0,
  "name": "string",
  "label": "string",
  "type": "virtual",
  "enabled": true,
  "mgmt_only": true,
  "description": "string",
  "bridge": 0,
  "poe_mode": "pd",
  "poe_type": "type1-ieee802.3af",
  "rf_role": "ap"
}
 */