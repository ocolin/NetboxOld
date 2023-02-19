<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Models\Models_Core;

abstract class Circuits_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'circuits/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}
