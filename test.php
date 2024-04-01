#!/opt/homebrew/opt/php@8.3/bin/php
<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox;

require_once __DIR__ . '/vendor/autoload.php';

$test = new \Cruzio\lib\Netbox\Models\DCIM\Sites();
$param = new \Cruzio\lib\Netbox\Params\DCIM\Sites();
$param->description = ['charry'];

$output = $test->getList( params: $param );
print_r( $output->body );
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
