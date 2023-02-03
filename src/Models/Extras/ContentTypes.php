<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

class ContentTypes extends Extras
{
    public function __construct()
    {
        parent::__construct( http: $http );
        $this->uri .= 'content-types/';
    }



}
