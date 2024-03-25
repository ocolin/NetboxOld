<?php

declare( strict_types=1 );

namespace Cruzio\lib\Netbox\Models\Virtualization;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Models_Core;

abstract class Virtualization_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'virtualization/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }
}
