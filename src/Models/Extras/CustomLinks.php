<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;

class CustomLinks extends Extras_Core
{    
    public function __construct( HTTP $http = null  )
    {
        parent::__construct( http: $http );
        $this->uri .= 'custom-links/';
    }

}