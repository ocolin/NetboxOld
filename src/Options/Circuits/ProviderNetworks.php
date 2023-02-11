<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Circuits;

#[\AllowDynamicProperties]
class ProviderNetworks
{
    public int    $provider;
    public array  $tags;
    public array  $custom_fields;
    public string $name;
    public string $service_id;
    public string $description;
    public string $comments;
}