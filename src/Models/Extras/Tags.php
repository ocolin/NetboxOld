<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Extras\Tags AS Options;

class Tags extends Extras_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'tags/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Platform.
*
* @param  string $name Name of Platform.
* @param  string $slug 
* @param  array<string, string> $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $name,
        string $slug,
         array $options = [],
         array $headers = []
    ) : Response
    {
        $options['name'] = $name;
        $options['slug'] = $slug;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Platform
* 
* @param  integer $id Numerical ID of Platform to update.
* @param  string  $name Name of Platform to update.
* @param  string  $slug Slug of Platform to update.
* @param  array<string, mixed> $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
         array $options = [],
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options['name'] = $name;
        $options['slug'] = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Platform value(s).
*
* @param  integer $id Numerical ID of Platform to update.
* @param  string  $name Name of Platform to update.
* @param  string  $slug Slug of Platform to update.
* @param  array<string, string> $options Optional data to modify.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
        string $slug,
         array $options = [],
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options['name'] = $name;
        $options['slug'] = $slug;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}