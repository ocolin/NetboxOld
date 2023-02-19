<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class ImageAttachments
{
    public int    $object_id;
    public int    $image_height;
    public int    $image_width;

    public string $content_type;
    public string $name;
    public string $image;
}