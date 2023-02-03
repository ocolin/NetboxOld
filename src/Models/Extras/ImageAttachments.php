<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class ImageAttachments extends Extras
{
    public function __construct()
    {
        parent::__construct( http: $http );
        $this->uri .= 'image-attachments/';
    }



}
