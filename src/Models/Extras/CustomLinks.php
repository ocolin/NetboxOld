<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Extras\CustomLinks AS Options;

class CustomLinks extends Extras_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null  )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'custom-links/';
    }

    

/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Custom Link.
*
* @param array  $content_types Link content type.
* @param string $name Name of custom link.
* @param string $link_text Text of HTTP link.
* @param string $link_url HTTP link.
* @param Options $options Optional data to send.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
         array $content_types,
        string $name,
        string $link_text,
        string $link_url,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->content_types = $content_types;
        $options->name          = $name;
        $options->link_text     = $link_text;
        $options->link_url      = $link_url;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Custom Link
* 
* @param integer $id Numerical ID of User to update.
* @param array   $content_types Link content type.
* @param string  $name Name of custom link.
* @param string  $link_text Text of HTTP link.
* @param string  $link_url HTTP link.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
         array $content_types,
        string $name,
        string $link_text,
        string $link_url,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_types = $content_types;
        $options->name          = $name;
        $options->link_text     = $link_text;
        $options->link_url      = $link_url;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Custom Link value(s).
*
* @param integer $id Numerical ID of User to update.
* @param array   $content_types Link content type.
* @param string  $name Name of custom link.
* @param string  $link_text Text of HTTP link.
* @param string  $link_url HTTP link.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
         array $content_types,
        string $name,
        string $link_text,
        string $link_url,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->content_types = $content_types;
        $options->name          = $name;
        $options->link_text     = $link_text;
        $options->link_url      = $link_url;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
