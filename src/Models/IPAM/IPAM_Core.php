<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Models_Core;
use Cruzio\lib\Netbox\Models\ModelsInterface;

abstract class IPAM_Core extends Models_Core implements ModelsInterface
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'ipam/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}