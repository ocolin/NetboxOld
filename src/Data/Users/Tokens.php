<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Users;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class Tokens extends Data_Core implements DataInterface
{
    protected int    $user; // Class: Users
    protected string $expires; // Datetime
    protected string $key; // 40 char
    protected bool   $write_enabled; // Permit create/update/delete operations using this key
    protected string $description; // Max: 200

    /**
     * @var array<int> $allowed_ips
     */
    protected array $allowed_ips;



    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_update;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'user' ];
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
            'user_count'
        ];
    }
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "user": 0,
  "expires": "2024-03-25T00:17:59.755Z",
  "last_used": "2024-03-25T00:17:59.755Z",
  "key": "stringstringstringstringstringstringstri",
  "write_enabled": true,
  "description": "string"
}
 */