<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Virtualization;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\Virtualization\Interfaces AS Options;

class Interfaces extends Virtualization_Core
{
    protected Options $options;

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'interfaces/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Virtual Machine.
*
* @param  string  $name Name of Virtual Machine.
* @param  integer $virtual_machine ID of virtual machine interface belongs to. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
           int $virtual_machine,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;
        
        $options->name            = $name;
        $options->virtual_machine = $virtual_machine;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Virtual Machine
* 
* @param  integer $id Numerical ID of Virtual Machine to update.
* @param  string  $name Name of Virtual Machine to update.
* @param  integer $virtual_machine ID of virtual machine interface belongs to. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $virtual_machine,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name            = $name;
        $options->virtual_machine = $virtual_machine;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Virtual Machine value(s).
*
* @param  integer $id Numerical ID of Virtual Machine to update.
* @param  string  $name Name of Virtual Machine to update.
* @param  integer $virtual_machine ID of virtual machine interface belongs to. 
* @param  Options $options Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $virtual_machine,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name            = $name;
        $options->virtual_machine = $virtual_machine;

        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
