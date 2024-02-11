<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Users;

#[\AllowDynamicProperties]
class Users
{
    public int    $user;

    public string $username;
    public string $password;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $date_joined;

    public bool   $is_staff;
    public bool   $is_active;

    /**
     * @var array<string>
     */
    
    public array  $groups;
}