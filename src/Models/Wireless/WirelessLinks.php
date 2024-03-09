<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Wireless;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Wireless\WirelessLinks AS Options;

class WirelessLinks extends Wireless_Core
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
* @param  integer $interface_a
* @param  integer $interface_b
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $interface_a,
           int $interface_b,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;
        $options->interface_a = $interface_a;
        $options->interface_b = $interface_b;

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
* @param  integer $id Numerical ID of link to update.
* @param  integer $interface_a
* @param  integer $interface_b
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
           int $interface_a,
           int $interface_b,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        $options->interface_a = $interface_a;
        $options->interface_b = $interface_b;

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
* @param  integer $id Numerical ID of link to update.
* @param  integer $interface_a
* @param  integer $interface_b
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
           int $interface_a,
           int $interface_b,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        $options->interface_a = $interface_a;
        $options->interface_b = $interface_b;
        
        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}