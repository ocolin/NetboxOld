<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class ConnectedDevice extends Params_Core implements ParamsInterface
{
    protected string $peer_device;
    protected string $peer_interface;
}