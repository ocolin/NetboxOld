<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;

class VlanGroupsAvailableVlans extends IPAM_Core
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "vlan-groups/";
    }


/* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/**
 * @param  integer $id
 * @param  array<string, string> $params
 * @param  array<string, string> $headers HTML request headers
 * @return Response
 */
    public function getDetail( 
          int $id,
        array $params  = [],
        array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/available-vlans/";

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
 * @param  object  $data
 * @param  array<string, string> $headers HTML request headers
 * @return void
 */
    public function postDetail( 
           int $id, 
        object $data ,
         array $headers = []
    ) 
    {
        $this->uri .= "{$id}/available-vlans/";
        // NEEDS TO BE ADDED
    }
}
