<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Users;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Users\Tokens AS Options;

class Tokens extends Users_Core
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'tokens/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Token.
*
* @param  integer $user ID of user with token.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
           int $user,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->user = $user;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Group.
* 
* @param  integer $id Numerical ID of Group to update.
* @param  integer $user ID of user with token.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
           int $user,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->user = $user;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Group value(s).
*
* @param  integer $id Numerical ID of Group to update.
* @param  integer $user ID of user with token.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
           int $user,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->user = $user;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}