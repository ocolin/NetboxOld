<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Extras\CustomFields AS Options;

class CustomFields extends Extras
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
* @param string $name Name of custom field.
* @param array  $content_types Array of content types.
* @param array  $options optional data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
         array $content_types,
        string $type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['content_types'] = $content_types;
        $options['name']          = $name;
        $options['type']          = $type;

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
* @param integer $id Numerical ID of Custom Field to update.
* @param string  $name Name of custom field.
* @param array   $content_types Array of content types.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
         array $content_types,
        string $type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['content_types'] = $content_types;
        $options['name']          = $name;
        $options['type']          = $type;

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
* @param integer $id Numerical ID of Custom Field to update.
* @param string  $name Name of custom field.
* @param array   $content_types Array of content types.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
         array $content_types,
        string $type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['content_types'] = $content_types;
        $options['name']          = $name;
        $options['type']          = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
