<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Users;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class Users extends Data_Core implements DataInterface
{
    protected string $username; // Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.
    protected string $password; // Max: 128
    protected string $first_name; // Max: 150
    protected string $last_name; // Max: 150
    protected string $email; // Max: 256
    protected bool   $is_staff; // Designates whether the user can log into this admin site.
    protected bool   $is_active; // Designates whether this user should be treated as active. Unselect this instead of deleting accounts.
    protected string $date_joined;
    protected string $last_login;

    /**
     * @var array<int> $groups
     */
    protected array $groups;

    // READ ONLY
    protected int $id;
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
        return [ 'username', 'password' ];
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

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "username": "+Iat0FfzYk3@hvkdqy+PQ2qP9H2w-cYTsq1n85-hJRb7_+IP.",
  "password": "string",
  "first_name": "string",
  "last_name": "string",
  "email": "user@example.com",
  "is_staff": true,
  "is_active": true,
  "date_joined": "2024-03-17T15:54:04.953Z",
  "last_login": "2024-03-17T15:54:04.953Z",
  "groups": [
    0
  ]
}
 */