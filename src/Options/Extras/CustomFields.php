<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class CustomFields
{
    public int    $weight;
    public int    $validation_minimum;
    public int    $validation_maximum;

    public string $type;
    public string $object_type;
    public string $name;
    public string $label;
    public string $description;
    public string $filter_logic;
    public string $default;
    public string $validation_regex;

    public bool   $required;

    /**
     * @var array<string>
     */
    
    public array  $content_types;

    /**
     * @var array<string>
     */
    
    public array  $choices;
}