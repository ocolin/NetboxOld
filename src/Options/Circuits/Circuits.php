<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Circuits;

#[\AllowDynamicProperties]
class Circuits
{
    public int    $provider;
    public int    $type;
    public int    $tenant;
    public int    $commit_rate;

    public array  $tags;
    public array  $custom_fields;
    
    public string $cid;
    public string $status;
    public string $install_date;
    public string $description;
    public string $comments;
}