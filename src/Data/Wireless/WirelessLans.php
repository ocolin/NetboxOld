<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Wireless;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class WirelessLans extends Data_Core implements DataInterface
{
    /**
     * @var string $ssid
     * REQUIRED
     */
    protected string $ssid;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var int $group
     * ID of WirelessLanGroups class
     */
    protected int $group;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var int $vlan
     * ID of Vlans class
     */
    protected int $vlan;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $auth_type
     * ENUM
     */
    protected string $auth_type;

    /**
     * @var string $auth_cipher
     * ENUM
     */
    protected string $auth_cipher;

    /**
     * @var string $auth_psk
     */
    protected string $auth_psk;

    /**
     * @var string $comments
     */
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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'ssid'              => [ 'MaxString', 32 ],
            'description'       => [ 'MaxString', 200 ],
            'status'            => [ 'Status' ],
            'auth_type'         => [ 'WirelessAuthType' ],
            'auth_cipher'       => [ 'WirelessAuthCipher' ],
            'auth_psk'          => [ 'MaxString', 64 ],
        ];
    }

    use Validation\Status;
    use Validation\WirelessAuthType;
    use Validation\WirelessAuthCipher;
    use Validation\MaxString;

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