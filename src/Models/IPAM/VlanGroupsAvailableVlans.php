<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class VlanGroupsAvailableVlans extends IPAM_Core
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "vlan-groups/";
    }


/* GET METHOD DETAIL
---------------------------------------------------------------------------- */

    public function getDetail( 
          int $id,
        array $params  = [],
        array $headers = []
    ) : array
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
