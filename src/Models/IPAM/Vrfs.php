<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\IPAM\Vrfs AS Options;

class Vrfs extends IPAM_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'vrfs/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single VRF.
*
* @param  string  $name Name of VRF.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;
        $options->name = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update VRF
* 
* @param  integer $id Numerical ID of VRF to update.
* @param  string  $name Name of VRF to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update VRF value(s).
*
* @param  integer $id Numerical ID of VRF to update.
* @param  string  $name Name of VRF to update.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->name = $name;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}