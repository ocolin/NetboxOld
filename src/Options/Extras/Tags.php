<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class Tags
{
    public string $name;
    public string $slug;
    public string $color;
    public string $description;
}