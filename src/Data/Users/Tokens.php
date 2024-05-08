<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Users;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class Tokens extends Data_Core implements DataInterface
{
    /**
     * @var int $user
     * REQUIRED
     * ID of Users class
     */
    protected int $user;

    /**
     * @var string $expires
     * When token should expire
     */
    protected string $expires;

    /**
     * @var string $key
     */
    protected string $key;

    /**
     * @var bool $write_enabled
     * Permit create/update/delete operations using this key
     */
    protected bool $write_enabled;
    protected string $description; // Max: 200

    /**
     * @var array<int> $allowed_ips
     * List of IDs for IP address class objects
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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'expires'       => [ 'DateTime' ],
            'key'           => [ 'RangeString', 40, 40 ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\DateTime;
    use Validation\RangeString;
    use Validation\MaxString;
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