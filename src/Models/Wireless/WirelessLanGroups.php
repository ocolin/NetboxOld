<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Wireless\WirelessLanGroups AS Options;

class WirelessLanGroups extends Wireless
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'wireless-lan-groups/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single LAN Group.
*
* @param string  $name Name of LAN Group.
* @param string  $slug 
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
        string $slug,
          ?int $parent,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;
        
        $options->name = $name;
        $options->slug = $slug;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update LAN Group
* 
* @param integer $id Numerical ID of LAN Group to update.
* @param string  $name Name of LAN Group to update.
* @param string  $slug Slug of LAN Group to update.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
          ?int $parent,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name = $name;
        $options->slug = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update LAN Group value(s).
*
* @param integer $id Numerical ID of LAN Group to update.
* @param string  $name Name of LAN Group to update.
* @param string  $slug Slug of LAN Group to update.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
        string $slug,
          ?int $parent,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name = $name;
        $options->slug = $slug;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
