<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\IPAM\FhrpGroupAssignments AS Options;

class FhrpGroupAssignments extends IPAM_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'fhrp-group-assignments/';
    }


    
/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Fhrp Group Assignment.
*
* @param  integer $group ID of group assignment belongs to.
* @param  string  $interface_type Type of interface.
* @param  integer $interface_id ID of interface.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $group,
        string $interface_type,
           int $interface_id,
           int $priority,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;
        
        $options->group          = $group;
        $options->interface_type = $interface_type;
        $options->interface_id   = $interface_id;
        $options->priority       = $priority;

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
* @param  integer $id Numerical ID of Fhrp Group Assignment to update.
* @param  integer $group ID of group assignment belongs to.
* @param  string  $interface_type Type of interface.
* @param  integer $interface_id ID of interface.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $group,
        string $interface_type,
           int $interface_id,
           int $priority,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->group          = $group;
        $options->interface_type = $interface_type;
        $options->interface_id   = $interface_id;
        $options->priority       = $priority;

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
* @param  integer $id Numerical ID of Fhrp Group Assignment to update.
* @param  integer $group ID of group assignment belongs to.
* @param  string  $interface_type Type of interface.
* @param  integer $interface_id ID of interface.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $group,
        string $interface_type,
           int $interface_id,
           int $priority,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->group          = $group;
        $options->interface_type = $interface_type;
        $options->interface_id   = $interface_id;
        $options->priority       = $priority;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
