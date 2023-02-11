<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\IPAM\IpRanges AS Options;

class IpRanges extends IPAM
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'ip-ranges/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Range.
*
* @param string $start_address First IP address of range. 
* @param string $end_address Last IP address of range. 
* @param array  $data Optional data to be sent.
* @param array  $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $start_address,
        string $end_address,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['start_address'] = $start_address;
        $options['end_address']   = $end_address;

        return $this->http->post(
              uri: $this->uri,
             body: $options,
          headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Range
* 
* @param integer $id Numerical ID of Range to update.
* @param string  $start_address First IP address of range. 
* @param string  $end_address Last IP address of range. 
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $start_address,
        string $end_address,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['start_address'] = $start_address;
        $options['end_address']   = $end_address;

        return $this->http->put(
              uri: $this->uri,
             body: $options,
          headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Range value(s).
*
* @param integer $id Numerical ID of Range to update.
* @param string  $start_address First IP address of range. 
* @param string  $end_address Last IP address of range. 
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $start_address,
        string $end_address,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['start_address'] = $start_address;
        $options['end_address']   = $end_address;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
