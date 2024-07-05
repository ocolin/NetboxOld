<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\ModelsInterface;

class ConsolePortTemplates extends DCIM_Core implements ModelsInterface
{
    
    public function __construct( ?HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'console-port-templates/';
    }

}