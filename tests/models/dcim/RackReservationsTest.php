<?php 

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\RackReservations AS Options;

require_once __DIR__ . '/../testCore.php';

final class RackReservationsTest extends testCore
{
    public Options $options;
    public static $vc;
    public static $rack;
    public static $devrole;
    public static $location;
    public static $devtype;
    public static $manf;
    public static $site;
    public static $tenant;
    public static $user;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new RackReservations();
        $result = $o->options();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }


/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;

        $o = new RackReservations();
        $result = $o->getDetail( id: $rackres->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;

        $o = new RackReservations();
        $result = $o->getList();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertIsArray( $result->body->results );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new RackReservations();
        $result = $this->postDetail();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        //CLEAN UP
        $this->deleteDetail( $result->body->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new RackReservations();
        $result = $o->postList( options: [ $this->options ] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $rackres )
        {
            $this->deleteDetail( id: $rackres->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;

        $o = new RackReservations();
        $result = $o->putDetail( 
                     id: $rackres->id, 
                   rack: self::$rack->id,
                  units: [1],
                   user: self::$user->id,
            description: 'PHPUnit_RackRes'        
        );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;
        $this->options->id = $rackres->id;

        $o = new RackReservations();
        $result = $o->putList( options: [ $this->options ] );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;

        $o = new RackReservations();
        $result = $o->patchDetail(
                     id: $rackres->id, 
                   rack: self::$rack->id,
                  units: [1],
                   user: self::$user->id,
            description: 'PHPUnit_RackRes'
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;
        $this->options->id = $rackres->id;

        $o = new RackReservations();
        $result = $o->patchList( options: [ $this->options ] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $rackres->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;
        
        $o = new RackReservations();
        $result = $o->deleteDetail( id: $rackres->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $rackres = $this->postDetail()->body;

        $o = new RackReservations();
        $result = $o->deleteList(
            options: [[ 'id' => $rackres->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */

    public function postDetail() : Response
    {
        $o = new RackReservations();

        return $o->postDetail( 
                  rack: self::$rack->id,
                 units: [1],
                  user: self::$user->id,
            description: 'PHPUnit_RackRes'
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new RackReservations();

        return $o->deleteDetail( id: $id  );
    }



/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$site     = self::createSite();
        self::$manf     = self::createManufacturer();
        self::$tenant   = self::createTenant();
        self::$devtype  = self::createDeviceType( manf: self::$manf );
        self::$location = self::createLocation( site: self::$site );
        self::$devrole  = self::createDeviceRole();
        self::$vc       = self::createVirtualChassis();
        self::$rack     = self::createRack( 
            site: self::$site, location: self::$location 
        );
        self::$user     = self::createUser();
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyUser( user: self::$user );
        self::destroyRack( rack: self::$rack );
        self::destroyVirtualChassis( chassis: self::$vc );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyLocation( location: self::$location );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyTenant( tenant: self::$tenant );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$site );
        sleep(1);
    }
    
/*
---------------------------------------------------------------------------- */
     
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->rack        = self::$rack->id;
        $this->options->units       = [1];
        $this->options->user        = self::$user->id;
        $this->options->description = 'PHPUnit_RackResv-' . $rand;
    }
}