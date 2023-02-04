<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;

class Groups extends UsersCore
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'groups/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Group.
*
* @param string $name Name of Group.
* @param array  $options optionsl data to be sent
* @param array  $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name'] = $name;

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
* @param string  $name Name of Group.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name'] = $name;

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
* @param string  $name Name of Group.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name'] = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
