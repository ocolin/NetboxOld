<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class Modules extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'modules/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Module.
*
* @param integer $device ID of device Module belongs to.
* @param integer $module_bay ID of bay Module belongs to.
* @param integer $module_type ID of type of Module.
* @param array  $options optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device,
           int $module_bay,
           int $module_type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['device']      = $device;
        $options['module_bay']  = $module_bay;
        $options['module_type'] = $module_type;
        

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Module
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param integer $device ID of device Module belongs to.
* @param integer $module_bay ID of bay Module belongs to.
* @param integer $module_type ID of type of Module.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $device,
           int $module_bay,
           int $module_type,
          array $options = [],
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['device']      = $device;
        $options['module_bay']  = $module_bay;
        $options['module_type'] = $module_type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Module value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param integer $device ID of device Module belongs to.
* @param integer $module_bay ID of bay Module belongs to.
* @param integer $module_type ID of type of Module.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $device,
           int $module_bay,
           int $module_type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['device']      = $device;
        $options['module_bay']  = $module_bay;
        $options['module_type'] = $module_type;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
