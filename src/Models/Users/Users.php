<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Users;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\Users\Users AS Options;

class Users extends Users_Core
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'users/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single User.
*
* @param  string  $username Login username.
* @param  string  $password Login password.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $username,
        string $password,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->username = $username;
        $options->password = $password;

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
* @param  integer $id Numerical ID of User to update.
* @param  string  $username Login username.
* @param  string  $password Login password.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $username,
        string $password,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->username = $username;
        $options->password = $password;

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
* @param  integer $id Numerical ID of User to update.
* @param  string  $username Login username.
* @param  string  $password Login password.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $username,
        string $password,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->username = $username;
        $options->password = $password;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
