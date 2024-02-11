<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\DCIM\PowerFeeds AS Options;

class PowerFeeds extends DCIM_Core
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
* @param  integer $power_panel ID of Power panel that feed belongs to.
* @param  string  $name Name of Power Feed.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $power_panel,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->power_panel = $power_panel;
        $options->name        = $name;

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
* @param  integer $id Numerical ID of Platform to update.
* @param  integer $power_panel ID of Power panel that feed belongs to.
* @param  string  $name Name of Power Feed.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $power_panel,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->power_panel = $power_panel;
        $options->name        = $name;

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
* @param  integer $id Numerical ID of Platform to update.
* @param  integer $power_panel ID of Power panel that feed belongs to.
* @param  string  $name Name of Power Feed.
* @param  Options $options optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $power_panel,
        string $name,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;
        
        $options->power_panel = $power_panel;
        $options->name        = $name;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
