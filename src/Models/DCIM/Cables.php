<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class Cables extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'cables/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Cable.
*
* @param string  $termination_a_type Connection A type.
* @param integer $termination_a_id Connection A numercal ID.
* @param string  $termination_b_type Connection B type.
* @param integer $termination_b_id Connection B numercal ID.
* @param array  $options optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $termination_a_type,
           int $termination_a_id,
        string $termination_b_type,
           int $termination_b_id,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['termination_a_type'] = $termination_a_type;
        $options['termination_a_id']   = $termination_a_id;
        $options['termination_b_type'] = $termination_b_type;
        $options['termination_b_id']   = $termination_b_id;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Cable
* 
* @param integer $id Numerical ID of Site to update.
* @param string  $termination_a_type Connection A type.
* @param integer $termination_a_id Connection A numercal ID.
* @param string  $termination_b_type Connection B type.
* @param integer $termination_b_id Connection B numercal ID.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $termination_a_type,
           int $termination_a_id,
        string $termination_b_type,
           int $termination_b_id,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['termination_a_type'] = $termination_a_type;
        $options['termination_a_id']   = $termination_a_id;
        $options['termination_b_type'] = $termination_b_type;
        $options['termination_b_id']   = $termination_b_id;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Cable value(s).
*
* @param integer $id Numerical ID of Site to update.
* @param string  $termination_a_type Connection A type.
* @param integer $termination_a_id Connection A numercal ID.
* @param string  $termination_b_type Connection B type.
* @param integer $termination_b_id Connection B numercal ID.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $termination_a_type,
           int $termination_a_id,
        string $termination_b_type,
           int $termination_b_id,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['termination_a_type'] = $termination_a_type;
        $options['termination_a_id']   = $termination_a_id;
        $options['termination_b_type'] = $termination_b_type;
        $options['termination_b_id']   = $termination_b_id;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
