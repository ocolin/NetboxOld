<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;

class Config extends Users_Core
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'config/';
    }



/* GET METHOD
---------------------------------------------------------------------------- */

    public function get() : array
    {
        return $this->http->get( uri: $this->uri );
    }

}
