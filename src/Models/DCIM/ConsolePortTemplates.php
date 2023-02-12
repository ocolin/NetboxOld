<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\ConsolePortTemplates AS Options;

class ConsolePortTemplates extends DCIM
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'console-port-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single ConsolePortTemplates.
*
* @param string  $name Name of ConsolePortTemplates.
* @param integer $device_type ID of device type. 
* @param Options $options optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->name        = $name;
        $options->device_type = $device_type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update ConsolePortTemplates
* 
* @param integer $id Numerical ID of ConsolePortTemplates to update.
* @param string  $name Name of ConsolePortTemplates to update.
* @param integer $device_type ID of device type.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $device_type,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name        = $name;
        $options->device_type = $device_type;
        

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update ConsolePortTemplates value(s).
*
* @param integer $id Numerical ID of ConsolePortTemplates to update.
* @param string  $name Name of ConsolePortTemplates to update.
* @param string  $slug Slug of ConsolePortTemplates to update.
* @param Options $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $device_type,
        string $name,
         Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name        = $name;
        $options->device_type = $device_type;


        return $this->http->put(
                 uri: $this->uri,
                body: $options,
             headers: $headers
        );
    }
}
