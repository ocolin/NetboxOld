#!/opt/homebrew/opt/php@8.3/bin/php
<?php

declare( strict_types = 1 );

require_once __DIR__ . '/Netbox.php';
use Cruzio\lib\Netbox\Netbox;

$output = Netbox::get( module: 'DCIM\Sites' );
/*
$output = Netbox::create(
        module: 'DCIM\Sites',
        data: [
                'name' => 'testName',
                'slug' => 'testSlug'
        ]
);
*/

print_r( $output );

//namespace Cruzio\lib\Netbox;

//use GuzzleHttp\Exception\GuzzleException;

//require_once __DIR__ . '/vendor/autoload.php';

//$test = new \Cruzio\lib\Netbox\Controllers\DCIM\Sites();
//$param = new \Cruzio\lib\Netbox\Params\DCIM\Sites();
//$param->description = ['charry'];

//$output = $test->post( data: [ 'name' => 'SiteB', 'slug' => 'siteb' ] );
//print_r( $output );

/*
try {
    $output = $test->get();
    print_r( $output );
} catch (GuzzleException $e) {
    echo "Nah gone dew-it...";
}
*/
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
