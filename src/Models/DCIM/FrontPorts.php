<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\FrontPorts AS Options;

class FrontPorts extends DCIM
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'front-ports/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Port.
*
* @param string  $name Name of Port.
* @param integer $device ID of device Port is on. 
* @param string  $type Port type.
* @param integer $rear_port ID of rear port.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device,
        string $name,
        string $type,
           int $rear_port,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->name      = $name;
        $options->device    = $device;
        $options->type      = $type;
        $options->rear_port = $rear_port;

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
* @param integer $device ID of device Port is on. 
* @param string  $type Port type.
* @param integer $rear_port ID of rear port.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
        string $type,
           int $rear_port,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name      = $name;
        $options->device    = $device;
        $options->type      = $type;
        $options->rear_port = $rear_port;

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
* @param integer $device ID of device Port is on. 
* @param string  $type Port type.
* @param integer $rear_port ID of rear port.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
        string $type,
           int $rear_port,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name      = $name;
        $options->device    = $device;
        $options->type      = $type;
        $options->rear_port = $rear_port;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
