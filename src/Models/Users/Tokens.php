<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;

class Tokens extends UsersCore
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'tokens/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Token.
*
* @param integet $user ID of user with token.
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $user,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['user'] = $user;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Group.
* 
* @param integer $id Numerical ID of Group to update.
* @param integet $user ID of user with token.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $user,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['user'] = $user;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Group value(s).
*
* @param integer $id Numerical ID of Group to update.
* @param integet $user ID of user with token.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $user,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['user'] = $user;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
