<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Users;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class Users extends Data_Core implements DataInterface
{
    /**
     * @var string $username
     * REQUIRED
     * 150 characters or fewer. Letters, digits and @/./+/-/_ only.
     *
     */
    protected string $username;

    /**
     * @var string $password
     * REQUIRED
     */
    protected string $password;

    /**
     * @var string $first_name
     * user first name
     */
    protected string $first_name;

    /**
     * @var string $last_name
     * User last name
     */
    protected string $last_name;

    /**
     * @var string $email
     * User email address
     */
    protected string $email;

    /**
     * @var bool $is_staff
     * Designates whether the user can log into this admin site.
     */
    protected bool $is_staff;

    /**
     * @var bool $is_active
     * Designates whether this user should be treated as active.
     * Unselect this instead of deleting accounts.
     */
    protected bool $is_active;

    /**
     * @var string $date_joined
     * Date user joined server
     */
    protected string $date_joined;

    /**
     * @var string $last_login
     * Date/time of last login
     */
    protected string $last_login;

    /**
     * @var array<int> $groups
     * List of Groups IDs
     */
    protected array $groups;

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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'username'      => [ 'Username' ],
            'password'      => [ 'MaxString', 128 ],
            'first_name'    => [ 'MaxString', 150 ],
            'last_name'     => [ 'MaxString', 150 ],
            'email'         => [ 'MaxString', 254 ],
            'date_joined'   => [ 'DateTime' ],
            'last_login'    => [ 'DateTime' ],
        ];
    }

    use Validation\Username;
    use Validation\MaxString;
    use Validation\DateTime;
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