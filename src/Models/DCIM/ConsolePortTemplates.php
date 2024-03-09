<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\ConsolePortTemplates AS Options;

class ConsolePortTemplates extends DCIM_Core
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
* @param  string  $name Name of ConsolePortTemplates.
* @param  integer $device_type ID of device type. 
* @param  Options $options optionsl data to be sent
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $device_type,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
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
* @param  integer $id Numerical ID of ConsolePortTemplates to update.
* @param  string  $name Name of ConsolePortTemplates to update.
* @param  integer $device_type ID of device type.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
           int $device_type,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
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
* @param  integer $id Numerical ID of ConsolePortTemplates to update.
* @param  string  $name Name of ConsolePortTemplates to update.
* @param  Options $options Optional data to modify.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
           int $device_type,
        string $name,
         Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name        = $name;
        $options->device_type = $device_type;


        return $this->http->patch(
                 uri: $this->uri,
                body: $options,
             headers: $headers
        );
    }
}