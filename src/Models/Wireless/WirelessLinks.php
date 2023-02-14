<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Wireless\WirelessLinks AS Options;

class WirelessLinks extends Wireless
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'wireless-links/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Link.
*
* @param string $ssid Name of link to update.
* @param Options $options Optional data to send.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $interface_a,
           int $interface_b,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options['interface_a'] = $interface_a;
        $options['interface_b'] = $interface_b;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update link
* 
* @param integer $id Numerical ID of link to update.
* @param string  $ssid Name of link to update.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $interface_a,
           int $interface_b,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['interface_a'] = $interface_a;
        $options['interface_b'] = $interface_b;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Link value(s).
*
* @param integer $id Numerical ID of link to update.
* @param string  $ssid Name of link to update.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $interface_a,
           int $interface_b,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['interface_a'] = $interface_a;
        $options['interface_b'] = $interface_b;
        
        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
