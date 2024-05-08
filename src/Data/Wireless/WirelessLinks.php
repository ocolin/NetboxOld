<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Wireless;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class WirelessLinks extends Data_Core implements DataInterface
{
    /**
     * @var int $interface_a
     * REQUIRED
     * ID for DCIM\Interfaces class
     */
    protected int $interface_a;

    /**
     * @var int $interface_b
     * REQUIRED
     * ID for DCIM\Interfaces class
     */
    protected int $interface_b;

    /**
     * @var string $ssid
     */
    protected string $ssid;

    /**
     * @var string $status
     * ENUM - connected, planned, decommissioning
     */
    protected string $status;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $auth_type
     * ENUM - open, wep, wpa-personal, wpa-enterprise
     */
    protected string $auth_type;

    /**
     * @var string $auth_cipher
     * ENUM
     */
    protected string $auth_cipher;

    /**
     * @var string $auth_psk
     * Pre-shared key
     */
    protected string $auth_psk;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
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
        return [ 'interface_a', 'interface_b' ];
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
            'ssid'          => [ 'MaxString', 32 ],
            'description'   => [ 'MaxString', 200 ],
            'status'        => [ 'CableStatus' ],
            'auth_type'     => [ 'WirelessAuthType' ],
            'auth_cipher'   => [ 'WirelessAuthCipher' ],
            'auth_psk'      => [ 'MaxString', 64 ]
        ];
    }

    use Validation\MaxString;
    use Validation\CableStatus;
    use Validation\WirelessAuthType;
    use Validation\WirelessAuthCipher;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "interface_a": 0,
  "interface_b": 0,
  "ssid": "string",
  "status": "connected",
  "tenant": 0,
  "auth_type": "open",
  "auth_cipher": "auto",
  "auth_psk": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "eNUm7xD7i7FQDUiYbi09WykDCFGeLs",
      "color": "0db762"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */