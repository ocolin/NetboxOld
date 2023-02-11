<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Virtualization;

#[\AllowDynamicProperties]
class Clusters
{
    public int    $type;
    public int    $group;
    public int    $tenant;
    public int    $site;

    public string $name;
    public string $comments;

    public array  $tags;
    public array  $custom_fields;
}