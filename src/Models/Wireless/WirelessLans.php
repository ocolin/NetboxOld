<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Wireless;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\Wireless\WirelessLans AS Options;

class WirelessLans extends Wireless_Core
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
* @param  string $ssid Name of LAN to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $ssid,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;
        $options->ssid = $ssid;

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
* @param  integer $id Numerical ID of LAN Group to update.
* @param  string  $ssid Name of LAN to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $ssid,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->ssid = $ssid;

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
* @param  integer $id Numerical ID of LAN Group to update.
* @param  string  $ssid Name of LAN to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $ssid,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->ssid = $ssid;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
