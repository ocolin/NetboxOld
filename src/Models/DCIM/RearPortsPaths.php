<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class RearPortsPaths extends DCIM
{
    public function __construct( int $id, HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "rear-ports/{$id}/paths/";
    }
}
