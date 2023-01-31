<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class PowerPortTemplates extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'port-port-templates/';
    }
}
