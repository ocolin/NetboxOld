<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Virtualization;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Virtualization\VirtualMachines AS Options;

class VirtualMachines extends Virtualization
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'virtual-machines/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Virtual Machine.
*
* @param string  $name Name of Virtual Machine.
* @param integer $cluster ID of cluster machine belongs to. 
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
           int $cluster,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']    = $name;
        $options['cluster'] = $cluster;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Virtual Machine
* 
* @param integer $id Numerical ID of Virtual Machine to update.
* @param string  $name Name of Virtual Machine to update.
* @param integer $cluster ID of cluster machine belongs to. 
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $cluster,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']    = $name;
        $options['cluster'] = $cluster;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Virtual Machine value(s).
*
* @param integer $id Numerical ID of Virtual Machine to update.
* @param string  $name Name of Virtual Machine to update.
* @param integer $cluster ID of cluster machine belongs to. 
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $cluster,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']    = $name;
        $options['cluster'] = $cluster;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
