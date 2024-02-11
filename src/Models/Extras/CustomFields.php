<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\Extras\CustomFields AS Options;

class CustomFields extends Extras_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'custom-fields/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Custom Field.
*
* @param  string $name Name of custom field.
* @param  array<string, string>  $content_types Array of content types.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
         array $content_types,
        string $type,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->content_types = $content_types;
        $options->name          = $name;
        $options->type          = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Custom Field
* 
* @param  integer $id Numerical ID of Custom Field to update.
* @param  string  $name Name of custom field.
* @param  array<string, string> $content_types Array of content types.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
         array $content_types,
        string $type,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_types = $content_types;
        $options->name          = $name;
        $options->type          = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Custom Field value(s).
*
* @param  integer $id Numerical ID of Custom Field to update.
* @param  string  $name Name of custom field.
* @param  array<string, string> $content_types Array of content types.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
         array $content_types,
        string $type,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->content_types = $content_types;
        $options->name          = $name;
        $options->type          = $type;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
