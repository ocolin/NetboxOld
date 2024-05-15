<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\ModelsInterface;

class PowerOutletsTrace extends DCIM_Core implements ModelsInterface
{
    public function __construct( int $id, HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "power-outlets/$id/trace";
    }
}
