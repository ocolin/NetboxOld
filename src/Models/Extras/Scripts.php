<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class Scripts extends Extras
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'scripts/';
    }



}
