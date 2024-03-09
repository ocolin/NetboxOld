<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;

class ContentTypes
{
    protected string $uri = 'extras/';
    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'extras/content-types/';
        $this->http = $http ?? new HTTP();
    }


/**
* List details about API call.
*
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function options( array $headers = [] ) : Response
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }



 /* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Get an individual object
*
* @param  integer $id Numerical ID of an object record.
* @param  array <string, string>  $params Optional GET parameters.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function getDetail( 
        array $params  = [], 
        array $headers = [],
          int $id = null
    ) : Response
    {
        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }
}