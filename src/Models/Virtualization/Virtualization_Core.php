<?php

declare( strict_types=1 );

namespace Cruzio\Netbox\Models\Virtualization;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Models\Models_Core;

abstract class Virtualization_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'virtualization/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}
