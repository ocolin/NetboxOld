<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\IPAM\Prefixes AS Options;

class Prefixes extends IPAM_Core
{
    protected Options $options;

/* CONSTRUCTOR
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'prefixes/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single prefix.
*
* @param  string $prefix IP Subnet. ex prefix: '1.1.1.0/24'
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/
    
    public function postDetail(
        string $prefix,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;
        $options->prefix = $prefix;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
 * Update prefix
 *
* @param  string  $prefix IP Subnet. ex prefix: '1.1.1.0/24'
* @param  integer $id Numerical ID of prefix to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
        string $prefix,
           int $id,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->prefix = $prefix;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update prefix value(s).
*
* @param  integer $id Numerical ID of prefix to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $prefix,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->prefix = $prefix;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}