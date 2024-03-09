<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\InventoryItems AS Options;

class InventoryItems extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'inventory-items/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single item.
*
* @param  string  $name Name of item.
* @param  integer $device ID of device. 
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $device,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->name   = $name;
        $options->device = $device;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update item
* 
* @param  integer $id Numerical ID of item to update.
* @param  string  $name Name of item.
* @param  integer $device ID of device. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name   = $name;
        $options->device = $device;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update item value(s).
*
* @param  integer $id Numerical ID of item to update.
* @param  string  $name Name of item.
* @param  integer $device ID of device. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
       Options $options = null,
        array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->name   = $name;
        $options->device = $device;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}