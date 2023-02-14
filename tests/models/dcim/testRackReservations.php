<?php 

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\DCIM\RackReservations AS Options;

require_once __DIR__ . '/../testCore.php';

class testRackReservations extends testCore
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
        $o = new RackReservations();
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
        $rackres = $this->postDetail()['body'];

        $o = new RackReservations();
        $result = $o->getDetail( id: $rackres->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $rackres = $this->postDetail()['body'];

        $o = new RackReservations();
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
        $this->deleteDetail( $rackres->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new RackReservations();
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
        $o = new RackReservations();
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
        foreach( $result['body'] AS $rackres )
        {
            $this->deleteDetail( id: $rackres->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()['body'];

        $o = new RackReservations();
        $result = $o->putDetail( 
                     id: $rackres->id, 
                   rack: $_ENV['rack']->id,
                  units: [1],
                   user: $_ENV['user']->id,
            description: 'PHPUnit_RackRes'        
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
        $this->deleteDetail( $rackres->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $rackres = $this->postDetail()['body'];
        $this->options->id = $rackres->id;

        $o = new RackReservations();
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
        $this->deleteDetail( $rackres->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()['body'];

        $o = new RackReservations();
        $result = $o->patchDetail(
                     id: $rackres->id, 
                   rack: $_ENV['rack']->id,
                  units: [1],
                   user: $_ENV['user']->id,
            description: 'PHPUnit_RackRes'
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
        $this->deleteDetail( $rackres->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $rackres = $this->postDetail()['body'];
        $this->options->id = $rackres->id;

        $o = new RackReservations();
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
        $this->deleteDetail( $rackres->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()['body'];
        
        $o = new RackReservations();
        $result = $o->deleteDetail( id: $rackres->id );

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
        $rackres = $this->postDetail()['body'];

        $o = new RackReservations();
        $result = $o->deleteList(
            options: [[ 'id' => $rackres->id ]]
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
        $o = new RackReservations();

        return $o->postDetail( 
                  rack: $_ENV['rack']->id,
                 units: [1],
                  user: $_ENV['user']->id,
            description: 'PHPUnit_RackRes'
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new RackReservations();

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
        $_ENV['user']     = self::createUser();
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyUser( user: $_ENV['user'] );
        self::destroyRack( rack: $_ENV['rack'] );
        self::destroyVirtualChassis( chassis: $_ENV['vc'] );
        self::destroyDeviceRole( devrole: $_ENV['devrole'] );
        self::destroyLocation( location: $_ENV['location'] );
        self::destroyDeviceType( devtype: $_ENV['devtype'] );
        self::destroyTenant( tenant: $_ENV['tenant'] );
        self::destroyManufacturer( manf: $_ENV['manf'] );
        self::destroySite( site: $_ENV['site'] );

        unset( $_ENV['user'] ); 
        unset( $_ENV['rack'] );
        unset( $_ENV['vc'] );
        unset( $_ENV['devrole'] );
        unset( $_ENV['location'] );
        unset( $_ENV['devtype'] );
        unset( $_ENV['tenant'] );
        unset( $_ENV['manf'] );
        unset( $_ENV['site'] );
    }
        
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->rack        = $_ENV['rack']->id;
        $this->options->units       = [1];
        $this->options->user        = $_ENV['user']->id;
        $this->options->description = 'PHPUnit_RackResv-' . $rand;
    }
}