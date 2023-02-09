<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Virtualization;

use Cruzio\Netbox\Models\HTTP;

class Clusters extends Virtualization
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'clusters/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Cluster.
*
* @param string  $name Name of Cluster.
* @param integer $type ID of Cluster Type.
* @param integer $group ID of Cluster Group.
* @param integer $site ID of Site.
* @param array   $options optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
           int $type,
           int $group,
           int $site,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']  = $name;
        $options['type']  = $type;
        $options['group'] = $group;
        $options['site']  = $site;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Cluster 
* 
* @param integer $id Numerical ID of Cluster to update.
* @param string  $name Name of Cluster.
* @param integer $type ID of Cluster Type.
* @param integer $group ID of Cluster Group.
* @param integer $site ID of Site.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $type,
           int $group,
           int $site,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']  = $name;
        $options['type']  = $type;
        $options['group'] = $group;
        $options['site']  = $site;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Cluster value(s).
*
* @param integer $id Numerical ID of Cluster to update.
* @param string  $name Name of Cluster.
* @param integer $type ID of Cluster Type.
* @param integer $group ID of Cluster Group.
* @param integer $site ID of Site.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $type,
           int $group,
           int $site,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']  = $name;
        $options['type']  = $type;
        $options['group'] = $group;
        $options['site']  = $site;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
