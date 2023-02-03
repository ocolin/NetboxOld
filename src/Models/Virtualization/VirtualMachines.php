<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Virtualizations;

use Cruzio\Netbox\Models\HTTP;

class VirtualMachines extends Virtualizations
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'virtual-machines/';
    }



}
