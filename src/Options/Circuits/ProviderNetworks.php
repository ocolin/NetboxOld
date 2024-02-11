<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Circuits;

#[\AllowDynamicProperties]
class ProviderNetworks
{
    public int    $provider;

    /**
     * @var array<string>
     */

    public array  $tags;

    /**
     * @var array<string>
     */

    public array  $custom_fields;

    public string $name;
    public string $service_id;
    public string $description;
    public string $comments;
}