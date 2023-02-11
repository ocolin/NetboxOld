<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Tenancy;

#[\AllowDynamicProperties]
class Tenants
{
    public int    $group;

    public string $name;
    public string $slug;
    public string $description;
    public string $comments;

    public array  $tags;
    public array  $custom_fields;
}