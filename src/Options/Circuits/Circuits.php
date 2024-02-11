<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Circuits;

#[\AllowDynamicProperties]
class Circuits
{
    public int    $provider;
    public int    $type;
    public ?int   $tenant;
    public ?int   $commit_rate;

    /**
     * @var array<string>
     */

    public array  $tags;

    /**
     * @var array<string>
     */

    public array  $custom_fields;
    
    public string  $cid;
    public string  $status;
    public ?string $install_date;
    public string  $description;
    public string  $comments;
}