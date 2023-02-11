<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Users;

#[\AllowDynamicProperties]
class Tokens
{
    public int    $user;

    public string $expires;
    public string $description;
    public string $key;

    public bool   $write_enabled;
}