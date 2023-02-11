<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class FhrpGroupAssignments extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'fhrp-group-assignments/';
    }


    
/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Fhrp Group Assignment.
*
* @param integer $group ID of group assignment belongs to.
* @param string  $interface_type Type of interface.
* @param integer $interface_id ID of interface.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $group,
        string $interface_type,
           int $interface_id,
           int $priority,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['group']          = $group;
        $options['interface_type'] = $interface_type;
        $options['interface_id']   = $interface_id;
        $options['priority']       = $priority;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Fhrp Group Assignment
* 
* @param integer $id Numerical ID of Fhrp Group Assignment to update.
* @param integer $group ID of group assignment belongs to.
* @param string  $interface_type Type of interface.
* @param integer $interface_id ID of interface.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $group,
        string $interface_type,
           int $interface_id,
           int $priority,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['group']          = $group;
        $options['interface_type'] = $interface_type;
        $options['interface_id']   = $interface_id;
        $options['priority']       = $priority;

        return $this->http->put(
               uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Fhrp Group Assignment value(s).
*
* @param integer $id Numerical ID of Fhrp Group Assignment to update.
* @param integer $group ID of group assignment belongs to.
* @param string  $interface_type Type of interface.
* @param integer $interface_id ID of interface.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $group,
        string $interface_type,
           int $interface_id,
           int $priority,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['group']          = $group;
        $options['interface_type'] = $interface_type;
        $options['interface_id']   = $interface_id;
        $options['priority']       = $priority;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
