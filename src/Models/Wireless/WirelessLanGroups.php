<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Wireless;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\ModelsInterface;

class WirelessLanGroups extends Wireless_Core implements ModelsInterface
{

/*
---------------------------------------------------------------------------- */

    public function __construct( ?HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'wireless-lan-groups/';
    }
}