<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Circuits;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Circuits\ProviderNetworks AS Options;

class ProviderNetworks extends Circuits_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null)
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'provider-networks/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Network Provider.
*
* @param  string  $name Name of provider network.
* @param  integer $provider ID of provider. 
* @param  Options $options optionsl data to be sent
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $name,
           int $provider,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->name     = $name;
        $options->provider = $provider;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Network Provider
* 
* @param  integer $id Numerical ID of Network Provider to update.
* @param  string  $name Name of provider network.
* @param  integer $provider ID of provider. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
           int $provider,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name     = $name;
        $options->provider = $provider;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Network Provider value(s).
*
* @param  integer $id Numerical ID of Network Provider to update.
* @param  string  $name Name of provider network.
* @param  integer $provider ID of provider. 
* @param  Options $options Optional data to modify.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
           int $provider,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name     = $name;
        $options->provider = $provider;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}