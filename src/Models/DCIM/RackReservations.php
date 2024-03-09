<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\RackReservations AS Options;

class RackReservations extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'rack-reservations/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Reservation.
*
* @param  integer $rack  ID of Rack being reserved.
* @param  array<string, string>   $units ID of unit in rack.
* @param  integer $user ID of user reserving rack.
* @param  string  $description Description or the reservation.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $rack,
         array $units,
           int $user,
        string $description,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->rack        = $rack;
        $options->units       = $units;
        $options->user        = $user;
        $options->description = $description;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Reservation
* 
* @param  integer $id Numerical ID of Consol Port to update.
* @param  integer $rack  ID of Rack being reserved.
* @param  array<string, string>   $units ID of unit in rack.
* @param  integer $user ID of user reserving rack.
* @param  string  $description Description or the reservation.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
            int $id,
            int $rack,
          array $units,
            int $user,
         string $description,
       Options $options = null,
          array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->rack        = $rack;
        $options->units       = $units;
        $options->user        = $user;
        $options->description = $description;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Reservation value(s).
*
* @param  integer $id Numerical ID of Console Port to update.
* @param  integer $rack  ID of Rack being reserved.
* @param  array<string, string>   $units ID of unit in rack.
* @param  integer $user ID of user reserving rack.
* @param  string  $description Description or the reservation.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
           int $rack,
         array $units,
           int $user,
        string $description,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->rack        = $rack;
        $options->units       = $units;
        $options->user        = $user;
        $options->description = $description;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}