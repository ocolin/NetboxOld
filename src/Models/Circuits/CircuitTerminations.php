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



/* GET METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param integer $circuit
 * @param string $term_side
 * @param array $params
 * @param array $headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function get(
          int $circuit,
       string $term_side,
          int $id = 0,
        array $params  = [],
        array $headers = []
    ) : array
    {
        if( $id !== 0 ) { $this->uri .= "{$id}/";
        $params['circuit']   = $circuit;
        $params['term_side'] = $term_side;

        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }



/* POST METHOD
---------------------------------------------------------------------------- */

/*
 *
 * @param integer $circuit
 * @param string $term_side
 * @param array $data Data to send ibn request
 * @param array $params URI parameters
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function post(
          int $circuit,
       string $term_side,
          int $id = 0;
        array $data    = [],
        array $params  = [],
        array $headers = []
    ) : array
    {
        if( $id !== 0 ) { $this->uri .= "{$id}/";
        $data['circuit']   = $circuit;
        $data['term_side'] = $term_side;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
             params: $params,
            headers: $headers
        );
    }



/* PUT METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param integer $circuit
 * @param string $term_side
 * @param array $data Data to send ibn request
 * @param array $params URI parameters
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function put(
          int $circuit,
       string $term_side,
          int $id = 0,
        array $data    = [],
        array $params  = [],
        array $headers = []
    ) : array
    {
        if( $id !== 0 ) { $this->uri .= "{$id}/";
        $data['circuit']   = $circuit;
        $data['term_side'] = $term_side;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
             params: $params,
            headers: $headers
        );
    }



/* PATCH METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param integer $circuit
 * @param string $term_side
 * @param array $data Data to send ibn request
 * @param array $params URI parameters
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patch(
          int $circuit,
       string $term_side,
          int $id = 0,
        array $data    = [],
        array $params  = [],
        array $headers = []
    ) : array
    {
        if( $id !== 0 ) { $this->uri .= "{$id}/";
        $data['circuit']   = $circuit;
        $data['term_side'] = $term_side;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
             params: $params,
            headers: $headers
        );
    }



/* DELETE METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function delete( int $id = 0, array $headers = [] ) : array
    {
        if( $id !== 0 ) { $this->uri .= "{$id}/";

        return $this->http->get( uri: $this->uri, headers: $headers );
    }



/* OPTIONS METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function options( array $headers = [] ) : array
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }
}
