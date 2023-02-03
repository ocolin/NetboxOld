<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class Racks extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'racks/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Rack.
*
* @param integer $site ID of the rack.
* @param integer $location ID rack location.
* @param string  $name name or the rack.
* @param array  $options optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $site,
           int $location,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['site']     = $site;
        $options['location'] = $location;
        $options['name']     = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Rack
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param integer $site ID of the rack.
* @param integer $location ID rack location.
* @param string  $name name or the rack.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
            int $site,
            int $location,
         string $name,
         string $description,
          array $options = [],
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['site']     = $site;
        $options['location'] = $location;
        $options['name']     = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Rack value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param integer $site ID of the rack.
* @param integer $location ID rack location.
* @param string  $name name or the rack.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $site,
           int $location,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['site']     = $site;
        $options['location'] = $location;
        $options['name']     = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
