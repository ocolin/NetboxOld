<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\IPAM\Aggregates AS Options;

class Aggregates extends IPAM_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'aggregates/';
    }


 
/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Aggregate.
*
* @param  string  $prefix Subnet prefix, ex: '192.168.1.0/24' 
* @param  integer $rir ID of RIR.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $prefix,
           int $rir,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->prefix = $prefix;
        $options->rir    = $rir;

        return $this->http->post(
              uri: $this->uri,
             body: $options,
          headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Aggregate
* 
* @param  integer $id Numerical ID of Aggregate to update.
* @param  string  $prefix Subnet prefix, ex: '192.168.1.0/24' 
* @param  integer $rir ID of RIR.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $prefix,
           int $rir,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->prefix = $prefix;
        $options->rir    = $rir;

        return $this->http->put(
              uri: $this->uri,
             body: $options,
          headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Aggregate value(s).
*
* @param  integer $id Numerical ID of Aggregate to update.
* @param  string  $prefix Subnet prefix, ex: '192.168.1.0/24' 
* @param  integer $rir ID of RIR.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $prefix,
           int $rir,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->prefix = $prefix;
        $options->rir    = $rir;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}