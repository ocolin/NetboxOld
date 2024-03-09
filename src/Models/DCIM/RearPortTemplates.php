<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\RearPortTemplates AS Options;

class RearPortTemplates extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'rear-port-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Template.
*
* @param  string  $name Name of Template.
* @param  integer $device_type ID of Device type the Template belongs to. 
* @param  string  $type Port connector type.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $device_type,
        string $name,
        string $type,
       Options $options = null,
         array $headers = []
    ) : Response
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
* Update Template
* 
* @param  integer $id Numerical ID of Template to update.
* @param  string  $name Name of Template.
* @param  integer $device_type ID of Device type the Template belongs to. 
* @param  string  $type Port connector type.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
        string $type,
           int $device_type,
       Options $options = null,
         array $headers = []
    ) : Response
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
* Update Template value(s).
*
* @param  integer $id Numerical ID of Template to update.
* @param  string  $name Name of Template.
* @param  integer $device_type ID of Device type the Template belongs to.
* @param  string  $type Port connector type. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
        string $type,
           int $device_type,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->name        = $name;
        $options->device_type = $device_type;
        $options->type        = $type;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}