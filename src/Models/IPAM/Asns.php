<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\IPAM\Asns AS Options;

class Asns extends IPAM_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'asns/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single ASN.
*
* @param  integer $asn Numeric value of ASN
* @param  integer $rir ID of RIR.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $asn,
           int $rir,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;
        
        $options->asn = $asn;
        $options->rir = $rir;

        return $this->http->post(
               uri: $this->uri,
              body: $options,
           headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update ASN
* 
* @param  integer $id Numerical ID of ASN to update.
* @param  integer $asn Numeric value of ASN
* @param  integer $rir ID of RIR.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
          int $id,
          int $asn,
          int $rir,
       Options $options = null,
        array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->asn = $asn;
        $options->rir = $rir;

        return $this->http->put(
               uri: $this->uri,
              body: $options,
           headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update ASN value(s).
*
* @param  integer $id Numerical ID of ASN to update.
* @param  integer $asn Numeric value of ASN
* @param  integer $rir ID of RIR.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
          int $id,
          int $asn,
          int $rir,
       Options $options = null,
        array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->asn = $asn;
        $options->rir = $rir;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}