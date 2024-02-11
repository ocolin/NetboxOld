<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Circuits;

#[\AllowDynamicProperties]
class Providers
{
    public ?int   $asn;

    public string $name;
    public string $slug;

    /**
     * @var array<string>
     */

    public array  $asns;

    /**
     * @var array<string>
     */

    public array  $tags;

    /**
     * @var array<string>
     */

    public array  $custom_fields;
    
    public string $account;
    public string $portal_url;
    public string $noc_contact;
    public string $admin_contact;
    public string $comments;
}