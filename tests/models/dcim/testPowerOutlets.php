<?php 

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\DCIM\PowerOutlets AS Options;

require_once __DIR__ . '/../testCore.php';

class testPowerOutlets extends testCore
{
    public Options $options;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new PowerOutlets();
        $result = $o->options();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
    }


/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->getDetail( id: $outlet->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $outlet->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->getList();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertIsArray( $result['body']->results );

        // CLEAN UP
        $this->deleteDetail( $outlet->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new PowerOutlets();
        $result = $this->postDetail();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        //CLEAN UP
        $this->deleteDetail( $result['body']->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new PowerOutlets();
        $result = $o->postList(
            options: [[ 
                      'name' => 'PHPUnit_PwrOutlet',
                    'device' => $_ENV['device']->id
                ]] 
            );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        //CLEAN UP
        foreach( $result['body'] AS $outlet )
        {
            $this->deleteDetail( id: $outlet->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->putDetail( 
                id: $outlet->id, 
              name: 'PHPUnit_PwrOutlet',
            device: $_ENV['device']->id                 
        );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $outlet->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->putList(
            options: [
                [ 
                        'id' => $outlet->id,
                      'name' => 'PHPUnit_PwrOutlet',
                    'device' => $_ENV['device']->id
                ]
            ]
        );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $outlet->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->patchDetail(
                id: $outlet->id, 
              name: 'PHPUnit_PwrOutlet',
            device: $_ENV['device']->id 
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $outlet->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->patchList(
            options: [
                [ 
                        'id' => $outlet->id,
                      'name' => 'PHPUnit_PwrOutlet',
                    'device' => $_ENV['device']->id
                ]
            ]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $outlet->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];
        
        $o = new PowerOutlets();
        $result = $o->deleteDetail( id: $outlet->id );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $outlet = $this->postDetail()['body'];

        $o = new PowerOutlets();
        $result = $o->deleteList(
            options: [[ 'id' => $outlet->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 204, $result['status'] );
    }



/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */

    public function postDetail() : array
    {
        $o = new PowerOutlets();

        return $o->postDetail( 
              name: 'PHPUnit_PwrOutlet',
            device: $_ENV['device']->id
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new PowerOutlets();

        return $o->deleteDetail( id: $id  );
    }



/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        $_ENV['site']     = self::createSite();
        $_ENV['manf']     = self::createManufacturer();
        $_ENV['tenant']   = self::createTenant();
        $_ENV['devtype']  = self::createDeviceType( manf: $_ENV['manf'] );
        $_ENV['location'] = self::createLocation( site: $_ENV['site'] );
        $_ENV['devrole']  = self::createDeviceRole();
        $_ENV['vc']       = self::createVirtualChassis();
        $_ENV['rack']     = self::createRack( 
            site: $_ENV['site'], location: $_ENV['location'] 
        );
        $_ENV['device']   = self::createDevice(
                       site: $_ENV['site'],
                     tenant: $_ENV['tenant'],
                 devicetype: $_ENV['devtype'],
                 devicerole: $_ENV['devrole'],
            virtual_chassis: $_ENV['vc'],
                       rack: $_ENV['rack']
        );
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyDevice( device: $_ENV['device'] );
        self::destroyRack( rack: $_ENV['rack'] );
        self::destroyVirtualChassis( chassis: $_ENV['vc'] );
        self::destroyDeviceRole( devrole: $_ENV['devrole'] );
        self::destroyLocation( location: $_ENV['location'] );
        self::destroyDeviceType( devtype: $_ENV['devtype'] );
        self::destroyTenant( tenant: $_ENV['tenant'] );
        self::destroyManufacturer( manf: $_ENV['manf'] );
        self::destroySite( site: $_ENV['site'] );

        unset( $_ENV['rack'] );
        unset( $_ENV['vc'] );
        unset( $_ENV['devrole'] );
        unset( $_ENV['location'] );
        unset( $_ENV['devtype'] );
        unset( $_ENV['tenant'] );
        unset( $_ENV['manf'] );
        unset( $_ENV['site'] );
        unset( $_ENV['device'] );
    }
        
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
    }
}