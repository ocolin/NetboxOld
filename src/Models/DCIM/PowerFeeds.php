<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class PowerFeeds extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'power-feeds/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Power Feed.
*
* @param integer $power_panel ID of Power panel that feed belongs to.
* @param string  $name Name of Power Feed.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $power_panel,
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['power_panel'] = $power_panel;
        $data['name']        = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Power Feed
* 
* @param integer $id Numerical ID of Platform to update.
* @param integer $power_panel ID of Power panel that feed belongs to.
* @param string  $name Name of Power Feed.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $power_panel,
        string $name,
        string $model,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['power_panel'] = $power_panel;
        $data['name']        = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Power Feed value(s).
*
* @param integer $id Numerical ID of Platform to update.
* @param integer $power_panel ID of Power panel that feed belongs to.
* @param string  $name Name of Power Feed.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $power_panel,
        string $name,
        string $model,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['power_panel'] = $power_panel;
        $data['name']        = $name;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
