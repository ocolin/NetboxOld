<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\DeviceRoles AS Options;

class DeviceRoles extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'device-roles/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Device Role.
*
* @param  string  $name Name of Device Role.
* @param  string  $slug 
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $name,
        string $slug,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->name = $name;
        $options->slug = $slug;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Device Role
* 
* @param  integer $id Numerical ID of Device Role to update.
* @param  string  $name Name of Device Role to update.
* @param  string  $slug Slug of Device Role to update.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name = $name;
        $options->slug = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Device Role value(s).
*
* @param  integer $id Numerical ID of Device Role to update.
* @param  string  $name Name of Device Role to update.
* @param  string  $slug Slug of Device Role to update.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
        string $slug,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name = $name;
        $options->slug = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}