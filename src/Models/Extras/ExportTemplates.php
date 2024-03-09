<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Extras\ExportTemplates AS Options;

class ExportTemplates extends Extras_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'export-templates/';
    }

    

/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Template.
*
* @param  array<string, string>  $content_types Template content type.
* @param  string $name Name of Template.
* @param  string $template_code Code inside template.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
         array $content_types,
        string $name,
        string $template_code,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;
        
        $options->content_types  = $content_types;
        $options->name           = $name;
        $options->template_code  = $template_code;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Template Link
* 
* @param  integer $id Numerical ID of Template to update.
* @param  array<string, string> $content_types Template content type.
* @param  string  $name Name of Template.
* @param  string  $template_code Code inside template.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
         array $content_types,
        string $name,
        string $template_code,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_types  = $content_types;
        $options->name           = $name;
        $options->template_code  = $template_code;

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
* @param  array<string, string> $content_types Template content type.
* @param  string  $name Name of Template.
* @param  string  $template_code Code inside template.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
         array $content_types,
        string $name,
        string $template_code,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_types  = $content_types;
        $options->name           = $name;
        $options->template_code  = $template_code;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}