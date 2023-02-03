<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class RackReservations extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'rack-reservations/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Reservation.
*
* @param integer $rack  ID of Rack being reserved.
* @param integer $units ID of unit in rack.
* @param integer $user ID of user reserving rack.
* @param string  $description Description or the reservation.
* @param array  $data optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $rack,
           int $units,
           int $user,
        string $description,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['rack']        = $rack;
        $data['units']       = $units;
        $data['user']        = $user;
        $data['description'] = $description;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Reservation
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param integer $rack  ID of Rack being reserved.
* @param integer $units ID of unit in rack.
* @param integer $user ID of user reserving rack.
* @param string  $description Description or the reservation.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
            int $id,
            int $rack,
            int $units,
            int $user,
         string $description,
          array $data    = [],
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['rack']        = $rack;
        $data['units']       = $units;
        $data['user']        = $user;
        $data['description'] = $description;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Reservation value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param integer $rack  ID of Rack being reserved.
* @param integer $units ID of unit in rack.
* @param integer $user ID of user reserving rack.
* @param string  $description Description or the reservation.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $rack,
           int $units,
           int $user,
        string $description,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['rack']        = $rack;
        $data['units']       = $units;
        $data['user']        = $user;
        $data['description'] = $description;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
