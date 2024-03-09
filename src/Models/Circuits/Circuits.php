<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Circuits;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Circuits\Circuits AS Options;

class Circuits extends Circuits_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'circuits/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Circuit.
*
* @param  string  $cid Name of circuit ID.
* @param  integer $provider ID of circuit provider.
* @param  integer $type ID of circuit type.
* @param  Options $options optionsl data to be sent
* @param  array<string, string>   $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $cid,
           int $provider,
           int $type,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->cid      = $cid;
        $options->provider = $provider;
        $options->type     = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Module
* 
* @param  integer $id Numerical ID of Consol Port to update.
* @param  string  $cid Name of circuit ID.
* @param  integer $provider ID of circuit provider.
* @param  integer $type ID of circuit type.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $cid,
           int $provider,
           int $type,
       Options $options = null,
          array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->cid      = $cid;
        $options->provider = $provider;
        $options->type     = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Module value(s).
*
* @param  integer $id Numerical ID of Console Port to update.
* @param  string  $cid Name of circuit ID.
* @param  integer $provider ID of circuit provider.
* @param  integer $type ID of circuit type.
* @param  Options $options Optional data to modify.
* @param  array<string, string> $headers HTML request headers.
* @return Response
*/

    public function patchDetail(
           int $id,
        string $cid,
           int $provider,
           int $type,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->cid      = $cid;
        $options->provider = $provider;
        $options->type     = $type;


        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
