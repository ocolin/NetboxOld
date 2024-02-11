<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Users;

#[\AllowDynamicProperties]
class Permissions
{
    public string $name;
    public string $description;
    public string $constraints;

    public bool   $enabled;

    /**
     * @var array<string>
     */
    
    public array  $object_types;

    /**
     * @var array<string>
     */
    
    public array  $groups;

    /**
     * @var array<string>
     */
    
    public array  $users;

    /**
     * @var array<string>
     */
    
    public array  $actions;
}