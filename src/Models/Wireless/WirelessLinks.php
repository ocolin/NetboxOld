<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\HTTP;

class WirelessLinks extends Wireless
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'wireless-links/';
    }
}
