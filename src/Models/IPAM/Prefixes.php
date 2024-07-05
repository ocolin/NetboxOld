<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\ModelsInterface;

class Prefixes extends IPAM_Core implements ModelsInterface
{

/* CONSTRUCTOR
---------------------------------------------------------------------------- */

    public function __construct( ?HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'prefixes/';
    }
}