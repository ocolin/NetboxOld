<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class PowerPanels extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'power-panels/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a Panel Outlet.
*
* @param string  $name Name of panel.
* @param integer $site ID of site the panel belongs to. 
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $site,
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']   = $name;
        $data['site'] = $site;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Panel
* 
* @param integer $id Numerical ID of Bay to update.
* @param string  $name Name of panel.
* @param integer $site ID of site the panel belongs to. 
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $site,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']   = $name;
        $data['site']   = $site;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Panel value(s).
*
* @param integer $id Numerical ID of Bay to update.
* @param string  $name Name of panel.
* @param integer $site ID of site the panel belongs to. 
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $site,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']   = $name;
        $data['site']   = $site;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
