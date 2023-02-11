<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class ModuleTypes
{
    public int    $manufacturer;

    public string $model;
    public string $part_number;
    public string $comments;

    public array  $tags;
    public array  $custom_fields;
}