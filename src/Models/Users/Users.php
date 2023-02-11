<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Users\Users AS Options;

class Users extends UsersCore
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'users/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single User.
*
* @param string $username Login username.
* @param string $password Login password.
* @param array  $options optionsl data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $username,
        string $password,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['username'] = $username;
        $options['password'] = $password;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update User
* 
* @param integer $id Numerical ID of User to update.
* @param string  $username Login username.
* @param string  $password Login password.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $username,
        string $password,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['username'] = $username;
        $options['password'] = $password;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update User value(s).
*
* @param integer $id Numerical ID of User to update.
* @param string  $username Login username.
* @param string  $password Login password.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $username,
        string $password,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['username'] = $username;
        $options['password'] = $password;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
