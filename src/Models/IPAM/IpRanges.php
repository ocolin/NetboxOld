<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\IPAM\IpRanges AS Options;

class IpRanges extends IPAM_Core
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
* @param  string $start_address First IP address of range. 
* @param  string $end_address Last IP address of range. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $start_address,
        string $end_address,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->start_address = $start_address;
        $options->end_address   = $end_address;

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
* @param  integer $id Numerical ID of Range to update.
* @param  string  $start_address First IP address of range. 
* @param  string  $end_address Last IP address of range. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $start_address,
        string $end_address,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->start_address = $start_address;
        $options->end_address   = $end_address;

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
* @param  integer $id Numerical ID of Range to update.
* @param  string  $start_address First IP address of range. 
* @param  string  $end_address Last IP address of range. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $start_address,
        string $end_address,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->start_address = $start_address;
        $options->end_address   = $end_address;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}