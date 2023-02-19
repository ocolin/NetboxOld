<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\DeviceTypes AS Options;

class DeviceTypes extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'device-types/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single DeviceType.
*
* @param string  $model Name of DeviceType.
* @param string  $slug 
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $manufacturer,
        string $model,
        string $slug,
        Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->model        = $model;
        $options->slug         = $slug;
        $options->manufacturer = $manufacturer;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update DeviceType
* 
* @param integer $id Numerical ID of DeviceType to update.
* @param string  $model Name of DeviceType to update.
* @param string  $slug Slug of DeviceType to update.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
            int $id,
            int $manufacturer,
         string $model,
         string $slug,
        Options $options = null,
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->model        = $model;
        $options->slug         = $slug;
        $options->manufacturer = $manufacturer;
        

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update DeviceType value(s).
*
* @param integer $id Numerical ID of DeviceType to update.
* @param string  $model Name of DeviceType to update.
* @param string  $slug Slug of DeviceType to update.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
            int $id,
            int $manufacturer,
         string $model,
         string $slug,
        Options $options = null,
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->model        = $model;
        $options->slug         = $slug;
        $options->manufacturer = $manufacturer;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
