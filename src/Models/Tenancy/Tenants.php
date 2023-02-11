<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Tenancy;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Tenancy\Tenants AS Options;

class Tenants extends Tenancy
{
    protected Options $options;
    
/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'tenants/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Tenant.
*
* @param string $name Name of Tenant.
* @param string $slug 
* @param array  $options optionsl data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
        string $slug,
         array $options    = [],
         array $headers = []
    ) : array
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
* Update Tenant
* 
* @param integer $id Numerical ID of Tenant to update.
* @param string  $name Name of Tenant to update.
* @param string  $slug Slug of Tenant to update.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
         array $options    = [],
         array $headers = []
    ) : array
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
* Update Tenant value(s).
*
* @param integer $id Numerical ID of Tenant to update.
* @param string  $name Name of Tenant to update.
* @param string  $slug Slug of Tenant to update.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
        string $slug,
         array $options    = [],
         array $headers = []
    ) : array
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
}
