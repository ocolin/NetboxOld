<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class CustomLinks
{
    public int    $weight;

    /**
     * @var array<string>
     */
    
    public array  $content_types;
    
    public string $name;
    public string $link_text;
    public string $link_url;
    public string $group_name;
    public string $button_class;

    public bool   $enabled;
    public bool   $new_window;
}