<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Users;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;

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

/**
 * 
 * @return Response
 */
    public function get() : Response
    {
        return $this->http->get( uri: $this->uri );
    }

}
