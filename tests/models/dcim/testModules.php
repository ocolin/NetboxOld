<?php 

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\DCIM\Modules AS Options;

require_once __DIR__ . '/../testCore.php';

class testModules extends testCore
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
        $o = new Modules();
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
        $module = $this->postDetail()['body'];

        $o = new Modules();
        $result = $o->getDetail( id: $module->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $module->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $module = $this->postDetail()['body'];

        $o = new Modules();
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
        $this->deleteDetail( $module->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Modules();
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
        $o = new Modules();
        $result = $o->postList( options: [ $this->options ] );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        //CLEAN UP
        foreach( $result['body'] AS $module )
        {
            $this->deleteDetail( id: $module->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $module = $this->postDetail()['body'];

        $o = new Modules();
        $result = $o->putDetail( 
                     id: $module->id, 
                 device: $_ENV['device']->id,
             module_bay: $_ENV['modbay']->id,
            module_type: $_ENV['modtype']->id,
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
        $this->deleteDetail( $module->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $module = $this->postDetail()['body'];
        $this->options->id = $module->id;

        $o = new Modules();
        $result = $o->putList( options: [ $this->options ] );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $module->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $module = $this->postDetail()['body'];

        $o = new Modules();
        $result = $o->patchDetail(
                     id: $module->id, 
                 device: $_ENV['device']->id,
             module_bay: $_ENV['modbay']->id,
            module_type: $_ENV['modtype']->id,
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
        $this->deleteDetail( $module->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $module = $this->postDetail()['body'];
        $this->options->id = $module->id;

        $o = new Modules();
        $result = $o->patchList( options: [ $this->options ] );

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $module->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $module = $this->postDetail()['body'];
        
        $o = new Modules();
        $result = $o->deleteDetail( id: $module->id );

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
        $module = $this->postDetail()['body'];

        $o = new Modules();
        $result = $o->deleteList(
            options: [[ 'id' => $module->id ]]
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
        $o = new Modules();

        return $o->postDetail( 
                 device: $_ENV['device']->id,
             module_bay: $_ENV['modbay']->id,
            module_type: $_ENV['modtype']->id,
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new Modules();

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
        $_ENV['modbay'] = self::createModuleBay( device: $_ENV['device'] );
        $_ENV['modtype'] = self::createModuleType( manufacturer: $_ENV['manf'] );
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyModuleType( modtype: $_ENV['modtype'] );
        self::destroyModuleBay( bay: $_ENV['modbay'] );
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
        unset( $_ENV['modbay'] );
        unset( $_ENV['modtype'] ); 
    }
        
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->device      = $_ENV['device']->id;
        $this->options->module_bay  = $_ENV['modbay']->id;
        $this->options->module_type = $_ENV['modtype']->id;
        $this->options->comments    = 'PHPUnit_Module-' . $rand;
    }
}