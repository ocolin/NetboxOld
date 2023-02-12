<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Users\Permissions AS Options;

class Premissions extends UsersCore
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'premissions/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Permission.
*
* @param string  $name Name of Permission.
* @param array   $object_types String array of objects.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
         array $object_types,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options['name']         = $name;
        $options['object_types'] = $object_types;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Permission.
* 
* @param integer $id Numerical ID of Permission to update.
* @param string  $name Name of Permission.
* @param array   $object_types String array of objects.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
         array $object_types,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']         = $name;
        $options['object_types'] = $object_types;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Permission value(s).
*
* @param integer $id Numerical ID of Permission to update.
* @param string  $name Name of Permission.
* @param array   $object_types String array of objects.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
         array $object_types,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']         = $name;
        $options['object_types'] = $object_types;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
