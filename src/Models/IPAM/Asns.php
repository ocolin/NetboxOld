<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class Asns extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'asns/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single ASN.
*
* @param integer $asn Numeric value of ASN
* @param integer $rir ID of RIR.
* @param array   $data Optionsl data to be sent.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $asn,
           int $rir,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['asn'] = $asn;
        $options['rir'] = $rir;

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
* @param integer $id Numerical ID of ASN to update.
* @param integer $asn Numeric value of ASN
* @param integer $rir ID of RIR.
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
          int $id,
          int $asn,
          int $rir,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['asn'] = $asn;
        $options['rir'] = $rir;

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
* @param integer $id Numerical ID of ASN to update.
* @param integer $asn Numeric value of ASN
* @param integer $rir ID of RIR.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
          int $id,
          int $asn,
          int $rir,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['asn'] = $asn;
        $options['rir'] = $rir;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
