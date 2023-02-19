<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\InterfaceTemplates AS Options;

class InterfaceTemplates extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'interface-templates/';
    }

/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single template.
*
* @param string  $name Name of template.
* @param integer $device_type ID of device type. 
* @param string  $type port type.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
        string $name,
        string $type,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->name        = $name;
        $options->device_type = $device_type;
        $options->type        = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update template
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param string  $name Name of template.
* @param integer $device_type ID of device type. 
* @param string  $type Port type.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device_type,
        string $type,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name        = $name;
        $options->device_type = $device_type;
        $options->type        = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update template value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param string  $name Name of template.
* @param integer $device_typeoo ID of device type. 
* @param string  $type Port type.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device_type,
        string $type,
       Options $options = null,
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->name        = $name;
        $options->device_type = $device_type;
        $options->type        = $type;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
