<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Users;

#[\AllowDynamicProperties]
class Permissions
{
    public string $name;
    public string $description;
    public string $constraints;

    public bool   $enabled;

    public array  $object_types;
    public array  $groups;
    public array  $users;
    public array  $actions;
}