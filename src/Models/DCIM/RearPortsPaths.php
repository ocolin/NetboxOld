<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;

class RearPortsPaths extends DCIM_Core
{
    public function __construct( int $id, HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "rear-ports/{$id}/paths/";
    }
}
