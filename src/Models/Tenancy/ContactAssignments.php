<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Tenancy;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Tenancy\ContactAssignments AS Options;

class ContactAssignments extends Tenancy_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'contact-assignments/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Contact Assignment.
*
* @param  string  $content_type
* @param  integer $object_id
* @param  integer $contact
* @param  integer $role
* @param  string  $priority
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $content_type,
           int $object_id,
           int $contact,
           int $role,
        string $priority,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->content_type = $content_type;
        $options->object_id    = $object_id;
        $options->contact      = $contact;
        $options->role         = $role;
        $options->priority     = $priority;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Contact Assignment
* 
* @param  integer $id Numerical ID of Contact Assignment to update.
* @param  string  $content_type
* @param  integer $object_id
* @param  integer $contact
* @param  integer $role
* @param  string  $priority
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $content_type,
           int $object_id,
           int $contact,
           int $role,
        string $priority,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_type = $content_type;
        $options->object_id    = $object_id;
        $options->contact      = $contact;
        $options->role         = $role;
        $options->priority     = $priority;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Contact Assignment value(s).
*
* @param  integer $id Numerical ID of Contact Assignment to update.
* @param  string  $content_type
* @param  integer $object_id
* @param  integer $contact
* @param  integer $role
* @param  string  $priority
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $content_type,
           int $object_id,
           int $contact,
           int $role,
        string $priority,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_type = $content_type;
        $options->object_id    = $object_id;
        $options->contact      = $contact;
        $options->role         = $role;
        $options->priority     = $priority;


        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}