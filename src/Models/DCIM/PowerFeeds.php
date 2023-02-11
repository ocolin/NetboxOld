<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\PowerFeeds AS Options;

class PowerFeeds extends DCIM
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'power-feeds/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Power Feed.
*
* @param integer $power_panel ID of Power panel that feed belongs to.
* @param string  $name Name of Power Feed.
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $power_panel,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['power_panel'] = $power_panel;
        $options['name']        = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Power Feed
* 
* @param integer $id Numerical ID of Platform to update.
* @param integer $power_panel ID of Power panel that feed belongs to.
* @param string  $name Name of Power Feed.
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $power_panel,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['power_panel'] = $power_panel;
        $options['name']        = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Power Feed value(s).
*
* @param integer $id Numerical ID of Platform to update.
* @param integer $power_panel ID of Power panel that feed belongs to.
* @param string  $name Name of Power Feed.
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $power_panel,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['power_panel'] = $power_panel;
        $options['name']        = $name;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
