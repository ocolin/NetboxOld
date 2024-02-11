<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Extras;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Options\Extras\Webhooks AS Options;

class Webhooks extends Extras_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'webhooks/';
    }



}
