<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Virtualization;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\Virtualization\Clusters AS Options;

class Clusters extends Virtualization_Core
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'clusters/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Cluster.
*
* @param  string  $name Name of Cluster.
* @param  integer $type ID of Cluster Type.
* @param  integer $group ID of Cluster Group.
* @param  integer $site ID of Site.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postDetail(
        string $name,
           int $type,
           int $group,
           int $site,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $options = $options ?? $this->options;

        $options->name  = $name;
        $options->type  = $type;
        $options->group = $group;
        $options->site  = $site;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Cluster 
* 
* @param  integer $id Numerical ID of Cluster to update.
* @param  string  $name Name of Cluster.
* @param  integer $type ID of Cluster Type.
* @param  integer $group ID of Cluster Group.
* @param  integer $site ID of Site.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putDetail(
           int $id,
        string $name,
           int $type,
           int $group,
           int $site,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name  = $name;
        $options->type  = $type;
        $options->group = $group;
        $options->site  = $site;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Cluster value(s).
*
* @param  integer $id Numerical ID of Cluster to update.
* @param  string  $name Name of Cluster.
* @param  integer $type ID of Cluster Type.
* @param  integer $group ID of Cluster Group.
* @param  integer $site ID of Site.
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchDetail(
           int $id,
        string $name,
           int $type,
           int $group,
           int $site,
       Options $options = null,
         array $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->name  = $name;
        $options->type  = $type;
        $options->group = $group;
        $options->site  = $site;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}