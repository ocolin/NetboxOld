<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options;

#[\AllowDynamicProperties]
class CircuitTypes
{
    public string  $name          = '';
    public string  $slug          = '';
    public string  $description   = '';
    public ?object $tags          = null;
    public array   $custom_fields = [];
}