<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;

class PrefixesAvailableIps extends IPAM_Core
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "prefixes/";
    }

/* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/**
 * @param  integer $id
 * @param  array<string, string> $headers HTML request headers
 * @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
 */
    public function getDetail( 
          int $id,
        array $params  = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/available-ips/";

        return $this->http->get( 
                uri: $this->uri, 
             params: $params,
            headers: $headers 
        );
    }


    
/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
 * @param  integer $id
 * @param  object $data
 * @param  array<string, string> $headers HTML request headers
 * @return void
 */
    public function postDetail( 
           int $id, 
        object $data ,
         array $headers = []
    )
    {
        $this->uri .= "{$id}/available-ips/";
        // NEEDS TO BE ADDED
    }
}
