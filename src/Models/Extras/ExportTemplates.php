<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class ExportTemplates extends Extras
{
    public function __construct()
    {
        parent::__construct( http: $http );
        $this->uri .= 'export-templates/';
    }

    

/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Template.
*
* @param string $content_type Template content type.
* @param string $name Name of Template.
* @param string $template_code Code inside template.
* @param array  $options optionsl data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $content_type,
        string $name,
        string $template_code,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['content_type']  = $content_type;
        $options['name']          = $name;
        $options['template_code'] = $template_code;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Template Link
* 
* @param integer $id Numerical ID of Template to update.
* @param string $content_type Template content type.
* @param string $name Name of Template.
* @param string $template_code Code inside template.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
        string $content_type,
        string $name,
        string $template_code,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['content_type']  = $content_type;
        $options['name']          = $name;
        $options['template_code'] = $template_code;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Template value(s).
*
* @param integer $id Numerical ID of Template to update.
* @param string $content_type Template content type.
* @param string $name Name of Template.
* @param string $template_code Code inside template.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
        string $content_type,
        string $name,
        string $template_code,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['content_type']  = $content_type;
        $options['name']          = $name;
        $options['template_code'] = $template_code;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
