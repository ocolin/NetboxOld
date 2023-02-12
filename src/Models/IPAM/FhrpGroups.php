<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\IPAM\FhrpGroups AS Options;

class FhrpGroups extends IPAM
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'fhrp-groups/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */
    
/**
* Create a single Fhrp Group.
*
* @param integer $group ID of group belongs to.
* @param string  $protocol Protocol of group: vrrp2, vrrp3, carp, clusterxl, hsrp, glbp, other.
* @param integer $group_id ID of Group
* @param Options $options Optional data to send.
* @param array $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/
    
    public function postDetail(
         string $protocol,
            int $group_id,
        Options $options = null,
          array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->protocol = $protocol;
        $options->group_id = $group_id;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
    
    
    
/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Fhrp Group
* 
* @param integer $id Numerical ID of Fhrp Group to update.
* @param string  $protocol Protocol of group: vrrp2, vrrp3, carp, clusterxl, hsrp, glbp, other.
* @param integer $group_id ID of Group
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/
    
    public function putDetail(
            int $id,
         string $protocol,
            int $group_id,
        Options $options = null,
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->protocol = $protocol;
        $options->group_id = $group_id;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
    
    
    
/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Fhrp Group value(s).
*
* @param integer $id Numerical ID of Fhrp Group to update.
* @param string  $protocol Protocol of group: vrrp2, vrrp3, carp, clusterxl, hsrp, glbp, other.
* @param integer $group_id ID of Group
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/
    
    public function patchDetail(
            int $id,
         string $protocol,
            int $group_id,
        Options $options = null,
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->protocol = $protocol;
        $options->group_id = $group_id;

        return $this->http->put(
                uri: $this->uri,
                body: $options,
            headers: $headers
        );
    }
}
