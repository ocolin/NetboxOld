#!/opt/homebrew/opt/php@8.3/bin/php
<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox;

require_once __DIR__ . '/vendor/autoload.php';

$test = new Models\DCIM\Cables();

$output = $test->getList();
print_r( $output );
//$data = new Data\DCIM\Cables();

//use \Cruzio\lib\Netbox\Data\DCIM\Cables;

//$ip = new IpAddresses();

//$ip->address = '1.1.1.2';

//$rend = $ip->render();

//echo $ip->address . "\n";

//print_r( $rend );

/*
$device = new Devices();

$test = $device->postDetail(
    device_type: 60,
    device_role: 60,
    tenant: 50,
    site: 67,
    rack: 60,
    virtual_chassis: 60,
    vc_position: 1,
    name: 'testing',
    face: 'front'
);

//$test = $http->get(uri: '' );
print_r( $test );
*/