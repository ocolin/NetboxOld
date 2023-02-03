<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class FhrpGroups extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'fhrp-groups/';
    }



    * POST METHOD DETAIL
    ---------------------------------------------------------------------------- */
    
    /*
    * Create a single Fhrp Group.
    *
    * @param integer $group ID of group belongs to.
     * @param string  $protocol Protocol of group: vrrp2, vrrp3, carp, clusterxl, hsrp, glbp, other.
    * @param integer $group_id ID of Group
    * @param array   $data optionsl data to be sent
    * @param array $headers HTML request headers
    * @return array Array of HTTP status, headers, and body from Netbox API.
    */
    
        public function postDetail(
            string $protocol,
               int $group_id,
             array $data    = [],
             array $headers = []
        ) : array
        {
            $data['protocol'] = $protocol;
            $data['group_id'] = $group_id;
    
            return $this->http->post(
                    uri: $this->uri,
                   body: $data,
                headers: $headers
            );
        }
    
    
    
    /* PUT METHOD DETAIL
    ---------------------------------------------------------------------------- */
    
    /*
    * Update Fhrp Group
    * 
    * @param integer $id Numerical ID of Fhrp Group to update.
    * @param string  $protocol Protocol of group: vrrp2, vrrp3, carp, clusterxl, hsrp, glbp, other.
    * @param integer $group_id ID of Group
    * @param array   $data Optional data to send.
    * @param array   $headers HTML request headers
    * @return array Array of HTTP status, headers, and body from Netbox API.
    */
    
        public function putDetail(
               int $id,
            string $protocol,
               int $group_id,
             array $data    = [],
             array $headers = []
        ) : array
        {
            $this->uri .= "{$id}/";
            $data['protocol'] = $protocol;
            $data['group_id'] = $group_id;
    
            return $this->http->put(
                   uri: $this->uri,
                   body: $data,
                headers: $headers
            );
        }
    
    
    
    /* PATCH METHOD DETAIL
    ---------------------------------------------------------------------------- */
    
    /*
    * Update Fhrp Group value(s).
    *
    * @param integer $id Numerical ID of Fhrp Group to update.
    * @param string  $protocol Protocol of group: vrrp2, vrrp3, carp, clusterxl, hsrp, glbp, other.
    * @param integer $group_id ID of Group
    * @param array   $data Optional data to modify.
    * @param array   $headers HTML request headers.
    * @return array Array of HTTP status, headers, and body from Netbox API.
    */
    
        public function patchDetail(
               int $id,
            string $protocol,
               int $group_id,
             array $data    = [],
             array $headers = []
        ) : array
        {
            $this->uri .= "{$id}/";
            $data['protocol'] = $protocol;
            $data['group_id'] = $group_id;
    
    
            return $this->http->put(
                    uri: $this->uri,
                   body: $data,
                headers: $headers
            );
        }
}
