<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Wireless;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class WirelessLans extends Data_Core implements DataInterface
{
    protected string $ssid; // Max: 32
    protected string $description; // Max: 200
    protected int    $group; // Class: WirelessLanGroups
    protected string $status;
    protected int    $vlan; // Class IPAM\Vlans
    protected int    $tenant; // Class Yenancy\Tenants
    protected string $auth_type; 
    protected string $auth_cipher;
    protected string $auth_psk; // Max: 64
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */
    protected array $tags;
    protected object $custom_fields;


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
        return [ 'ssid' ];
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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [ 
            'status'      => 'Status', 
            'auth_type'   => 'WirelessAuthType',
            'auth_cipher' => 'WirelessAuthCipher'
        ];
    }

    use Validation\Status;
    use Validation\WirelessAuthType;
    use Validation\WirelessAuthCipher;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "ssid": "string",
  "description": "string",
  "group": 0,
  "status": "active",
  "vlan": 0,
  "tenant": 0,
  "auth_type": "open",
  "auth_cipher": "auto",
  "auth_psk": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "_3nzFtTjK7M4hScTAgVrqA3koTbwgfyXM7vKnifEy1ff7vyWjBf08DlZ2Ec02aWDBV9saclgDGIRcv",
      "color": "99f462"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */