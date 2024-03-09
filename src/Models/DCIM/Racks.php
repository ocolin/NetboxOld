<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\Racks AS Options;

class Racks extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'racks/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Rack.
*
* @param  integer $site ID of the rack.
* @param  integer $location ID rack location.
* @param  string  $name name or the rack.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $site,
           int $location,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->site     = $site;
        $options->location = $location;
        $options->name     = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Rack
* 
* @param  integer $id Numerical ID of Consol Port to update.
* @param  integer $site ID of the rack.
* @param  integer $location ID rack location.
* @param  string  $name name or the rack.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
            int $id,
            int $site,
            int $location,
         string $name,
        Options $options = null,
          array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->site     = $site;
        $options->location = $location;
        $options->name     = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Rack value(s).
*
* @param  integer $id Numerical ID of Console Port to update.
* @param  integer $site ID of the rack.
* @param  integer $location ID rack location.
* @param  string  $name name or the rack.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
           int $site,
           int $location,
        string $name,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->site     = $site;
        $options->location = $location;
        $options->name     = $name;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}