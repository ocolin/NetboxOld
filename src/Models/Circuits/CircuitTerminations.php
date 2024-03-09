<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Circuits;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Circuits\CircuitTerminations AS Options;

class CircuitTerminations extends Circuits_Core
{
    protected Options $options;

/* CONSTRUCTOR
---------------------------------------------------------------------------- */

/**
 *
*/

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'circuit-terminations/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Termination.
*
* @param  string  $term_side Terminal side: A or B.
* @param  integer $circuit ID of circuit.
* @param  Options $options optionsl data to be sent
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $term_side,
           int $circuit,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->term_side = $term_side;
        $options->circuit   = $circuit;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Termination
* 
* @param  integer $id Numerical ID of Consol Port to update.
* @param  string  $term_side Terminal side: A or B.
* @param  integer $circuit ID of circuit.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $term_side,
           int $circuit,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->term_side = $term_side;
        $options->circuit   = $circuit;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Termination value(s).
*
* @param  integer $id Numerical ID of Console Port to update.
* @param  string  $term_side Terminal side: A or B.
* @param  integer $circuit ID of circuit.
* @param  Options $options Optional data to modify.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $term_side,
           int $circuit,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->term_side = $term_side;
        $options->circuit   = $circuit;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
