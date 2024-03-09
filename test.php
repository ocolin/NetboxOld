#!/opt/homebrew/opt/php@8.3/bin/php
<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox;

require_once __DIR__ . '/vendor/autoload.php';

use \Cruzio\lib\Netbox\Models\HTTP;

$http = new HTTP();

$test = $http->get(uri: '' );
print_r( $test );