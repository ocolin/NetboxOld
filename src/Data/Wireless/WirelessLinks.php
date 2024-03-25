<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Wireless;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class WirelessLinks extends Data_Core implements DataInterface
{
    protected int $interface_a; // Class: DCIM\Interfaces
    protected int $interface_b; // Class: DCIM\Interfaces
    protected string $ssid; // Max: 32
    protected string $status;

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

}

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