<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\PowerPorts AS Options;

class PowerPorts extends DCIM
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'power-ports/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Bay.
*
* @param string  $name Name of Bay.
* @param integer $device ID of Bay belongs to. 
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']   = $name;
        $options['device'] = $device;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Port
* 
* @param integer $id Numerical ID of Port to update.
* @param string  $name Name of Port.
* @param integer $device ID of Port belongs to. 
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']   = $name;
        $options['device'] = $device;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Port value(s).
*
* @param integer $id Numerical ID of Port to update.
* @param string  $name Name of Port.
* @param integer $device ID of Port belongs to. 
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']   = $name;
        $options['device'] = $device;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
