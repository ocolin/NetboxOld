<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class ModuleTypes extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'module-types/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Type.
*
* @param integer $manufacturer ID of module manufacturer.
* @param string  $model Model name of module.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $manufacturer,
        string $model,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['manufacturer'] = $manufacturer;
        $data['model']        = $model;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Type
* 
* @param integer $id Numerical ID of Platform to update.
* @param integer $manufacturer ID of module manufacturer.
* @param string  $model Model name of module.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $manufacturer,
        string $model,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['manufacturer'] = $manufacturer;
        $data['model']        = $model;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Type value(s).
*
* @param integer $id Numerical ID of Platform to update.
* @param integer $manufacturer ID of module manufacturer.
* @param string  $model Model name of module.
* @param array   $data optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $manufacturer,
        string $model,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['manufacturer'] = $manufacturer;
        $data['model']        = $model;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
