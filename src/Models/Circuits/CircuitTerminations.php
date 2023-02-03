<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class CircuitTerminations extends Circuits
{

/* CONSTRUCTOR
---------------------------------------------------------------------------- */

/*
 *
*/

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'circuit-terminations/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Termination.
*
* @param string  $term_side Terminal side: A or B.
* @param integer $circuit ID of circuit.
* @param array   $data optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $term_side,
           int $circuit,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['term_side'] = $term_side;
        $data['circuit']   = $circuit;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Termination
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param string  $term_side Terminal side: A or B.
* @param integer $circuit ID of circuit.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $term_side,
           int $circuit,
          array $data    = [],
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['term_side'] = $term_side;
        $data['circuit']   = $circuit;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Termination value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param string  $term_side Terminal side: A or B.
* @param integer $circuit ID of circuit.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $term_side,
           int $circuit,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['term_side'] = $term_side;
        $data['circuit']   = $circuit;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
