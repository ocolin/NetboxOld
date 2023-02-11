<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Extras\Webhooks AS Options;

class Webhooks extends Extras
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'webhooks/';
    }



}
