<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\Interfaces AS Options;

class Interfaces extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'interfaces/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single interface.
*
* @param  string  $name Name of interface.
* @param  integer $device ID of device. 
* @param  string  $type interface type.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $device,
        string $name,
        string $type,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->name   = $name;
        $options->device = $device;
        $options->type   = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update interface
* 
* @param  integer $id Numerical ID of interface to update.
* @param  string  $name Name of interface.
* @param  integer $device ID of device. 
* @param  string  $type interface type.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
        string $type,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name   = $name;
        $options->device = $device;
        $options->type   = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update interface value(s).
*
* @param  integer $id Numerical ID of interface to update.
* @param  string  $name Name of interface.
* @param  integer $device ID of device. 
* @param  string  $type interface type.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
        string $type,
       Options $options = null,
        array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->name   = $name;
        $options->device = $device;
        $options->type   = $type;


        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}