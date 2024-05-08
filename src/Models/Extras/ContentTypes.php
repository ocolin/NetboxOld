<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Models_Core;
use Cruzio\lib\Netbox\Models\ModelsInterface;

class ContentTypes extends Models_Core implements ModelsInterface
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'extras/content-types/';
        parent::__construct( http: $http );
    }

}