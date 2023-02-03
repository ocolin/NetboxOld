<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class ServiceTemplates extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'service-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Service Template.
*
* @param string  $name Name of Service Template.
* @param integer $ports Number or ports in Service Template.
* @param string  $protocol Service Template protocol: tcp, udp, sctp.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
         array $ports,
        string $protocol,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']     = $name;
        $data['ports']    = $ports;
        $data['protocol'] = $protocol;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Service Template 
* 
* @param integer $id Numerical ID of Service Template to update.
* @param string  $name Name of Service Template to update.
* @param integer $ports Number or ports in Service Template.
* @param string  $protocol Service protocol: tcp, udp, sctp.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
         array $ports,
        string $protocol,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']     = $name;
        $data['ports']    = $ports;
        $data['protocol'] = $protocol;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Service Template value(s).
*
* @param integer $id Numerical ID of Service Template to update.
* @param string  $name Name of Service Template to update.
* @param integer $ports Number or ports in Service Template.
* @param string  $protocol Service Template protocol: tcp, udp, sctp.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
         array $ports,
        string $protocol,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']     = $name;
        $data['ports']    = $ports;
        $data['protocol'] = $protocol;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
