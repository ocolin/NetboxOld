<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class ProviderNetworks extends Circuits
{
    public function __construct( HTTP $http = null)
    {
        parent::__construct( http: $http );
        $this->uri .= 'provider-networks/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Network Provider.
*
* @param string  $name Name of provider network.
* @param integer $provider ID of provider. 
* @param array   $data optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
           int $provider,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']     = $name;
        $data['provider'] = $provider;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Network Provider
* 
* @param integer $id Numerical ID of Network Provider to update.
* @param string  $name Name of provider network.
* @param integer $provider ID of provider. 
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $provider,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']     = $name;
        $data['provider'] = $provider;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Network Provider value(s).
*
* @param integer $id Numerical ID of Network Provider to update.
* @param string  $name Name of provider network.
* @param integer $provider ID of provider. 
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $provider,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']     = $name;
        $data['provider'] = $provider;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
