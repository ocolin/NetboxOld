<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Wireless\WirelessLans AS Options;

class WirelessLans extends Wireless
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'wireless-lans/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single LAN.
*
* @param string $ssid Name of LAN to update.
* @param array  $options optionsl data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $ssid,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['ssid'] = $ssid;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update LAN
* 
* @param integer $id Numerical ID of LAN Group to update.
* @param string  $ssid Name of LAN to update.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $ssid,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['ssid'] = $ssid;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update LAN value(s).
*
* @param integer $id Numerical ID of LAN Group to update.
* @param string  $ssid Name of LAN to update.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $ssid,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['ssid'] = $ssid;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
