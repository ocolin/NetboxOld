<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\VirtualChassis AS Options;

class VirtualChassis extends DCIM
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'virtual-chassis/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Virtual Chassis.
*
* @param string  $name Name of Virtual Chassis.
* @param string  $slug 
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;
        $options->name = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Virtual Chassis
* 
* @param integer $id Numerical ID of Virtual Chassis to update.
* @param string  $name Name of Virtual Chassis to update.
* @param string  $slug Slug of Virtual Chassis to update.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Virtual Chassis value(s).
*
* @param integer $id Numerical ID of Virtual Chassis to update.
* @param string  $name Name of Virtual Chassis to update.
* @param string  $slug Slug of Virtual Chassis to update.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
    
        $options->name = $name;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
