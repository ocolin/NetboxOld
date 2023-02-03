<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;

class UsersUsers extends Users
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

/*
* Create a single User.
*
* @param string $username Login username.
* @param string $password Login password.
* @param array  $data optionsl data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $username,
        string $password,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['username'] = $username;
        $data['password'] = $password;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update User
* 
* @param integer $id Numerical ID of User to update.
* @param string  $username Login username.
* @param string  $password Login password.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $username,
        string $password,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['username'] = $username;
        $data['password'] = $password;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update User value(s).
*
* @param integer $id Numerical ID of User to update.
* @param string  $username Login username.
* @param string  $password Login password.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $username,
        string $password,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['username'] = $username;
        $data['password'] = $password;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
