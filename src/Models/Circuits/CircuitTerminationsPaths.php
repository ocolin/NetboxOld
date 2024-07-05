<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Circuits;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\ModelsInterface;
use Cruzio\lib\Netbox\Models\Response;

class CircuitTerminationsPaths extends Circuits_Core  implements ModelsInterface
{
    public function __construct( int $id, ?HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "circuit-terminations/$id/paths";
    }
}
