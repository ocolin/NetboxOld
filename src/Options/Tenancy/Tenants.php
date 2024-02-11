<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Tenancy;

#[\AllowDynamicProperties]
class Tenants
{
    public int    $group;

    public string $name;
    public string $slug;
    public string $description;
    public string $comments;

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}