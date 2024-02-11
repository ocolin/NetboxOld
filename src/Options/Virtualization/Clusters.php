<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Virtualization;

#[\AllowDynamicProperties]
class Clusters
{
    public int    $type;
    public int    $group;
    public int    $tenant;
    public int    $site;

    public string $name;
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