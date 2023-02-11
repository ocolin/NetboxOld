<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Tenancy;

use Cruzio\Netbox\Models\HTTP;

class ContactAssignments extends Tenancy
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'contact-assignments/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Contact Assignment.
*
* @param string  $content_type
* @param integer $object_id
* @param integer $contact
* @param integer $role
* @param string  $priority
* @param array  $options optionsl data to be sent.
* @param array $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $content_type,
           int $object_id,
           int $contact,
           int $role,
        string $priority,
         array $options    = [],
         array $headers = []
    ) : array
    {
        $options['content_type'] = $content_type;
        $options['object_id']    = $object_id;
        $options['contact']      = $contact;
        $options['role']         = $role;
        $options['priority']     = $priority;

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
* @param integer $id Numerical ID of Contact Assignment to update.
* @param string  $content_type
* @param integer $object_id
* @param integer $contact
* @param integer $role
* @param string  $priority
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $content_type,
           int $object_id,
           int $contact,
           int $role,
        string $priority,
         array $options    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['content_type'] = $content_type;
        $options['object_id']    = $object_id;
        $options['contact']      = $contact;
        $options['role']         = $role;
        $options['priority']     = $priority;

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
* @param integer $id Numerical ID of Contact Assignment to update.
* @param string  $content_type
* @param integer $object_id
* @param integer $contact
* @param integer $role
* @param string  $priority
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $content_type,
           int $object_id,
           int $contact,
           int $role,
        string $priority,
         array $options    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['content_type'] = $content_type;
        $options['object_id']    = $object_id;
        $options['contact']      = $contact;
        $options['role']         = $role;
        $options['priority']     = $priority;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
