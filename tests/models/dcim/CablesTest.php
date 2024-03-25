<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;;
use Cruzio\lib\Netbox\Data\DCIM\Cables AS Data;
use Cruzio\lib\Netbox\Types\TerminationType;

require_once __DIR__ . '/../testCore.php';

final class CablesTest extends testCore
{
    public static object $site;
    public static object $manf;
    public static object $devrole;
    public static object $devtype;
    public static object $deviceA;
    public static object $deviceB;
    public static object $interfaceA;
    public static object $interfaceB;
    public static TerminationType $termA;
    public static TerminationType $termB;


    public function __construct()
    {
        parent::__construct();
    }

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new Cables();
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



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new Cables();
        $d = new Data();
        $testA = new \stdClass();
        $testA->object_type = 'dcim.interface';
        $testA->object_id = self::$deviceA->id;
        $testB = new \stdClass();
        $testB->object_type = 'dcim.interface';
        $testB->object_id = self::$deviceB->id;
        $d->a_terminations = [ $testA ];
        $d->b_terminations = [ $testB ];
        //$d->a_terminations = [ self::$termA ];
        //$d->b_terminations = [ self::$termB ];
       // print_r( $d->render());

        $result = $o->postDetail( data: $d, params: [ 'exclude' => 'config_context'] );
        print_r( $result->body );

        /*
        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        //$this->assertObjectHasAttribute( 'id', $result->body );
*/
        //return $result->body->id;
    }
  



/* SETUP DEPENDENT OBJECT
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$termA = new TerminationType();
        self::$termB = new TerminationType();

        self::$site = self::createSite();
        self::$manf = self::createManufacturer();
        self::$devrole = self::createDeviceRole();
        self::$devtype = self::createDeviceType( manf: self::$manf );
        self::$deviceA = self::createDevice(
            site: self::$site,
            devicetype: self::$devtype,
            devicerole: self::$devrole
        );
        self::$deviceB = self::createDevice(
            site: self::$site,
            devicetype: self::$devtype,
            devicerole: self::$devrole
        );
        self::$interfaceA = self::createInterface( device: self::$deviceA );
        self::$interfaceB = self::createInterface( device: self::$deviceB );
        


        self::$termA->object_type = 'dcim.interface';
        self::$termB->object_type = 'dcim.interface';
        self::$termA->object_id = self::$deviceA->id;
        self::$termB->object_id = self::$deviceB->id;
    }

 
/* CLOSE DEPENDENT OBJECT
---------------------------------------------------------------------------- */
 
    public static function tearDownAfterClass() : void
    {
        self::destroyInterface( interface: self::$interfaceA );
        self::destroyInterface( interface: self::$interfaceB );
        self::destroyDevice( device: self::$deviceB );
        self::destroyDevice( device: self::$deviceA );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$site );
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testGetDetail() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;
        print_r( $cable );

        $o = new Cables();
        $result = $o->getDetail( id: $cable->id );
        
        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );

        // CLEAN UP
        $this->deleteDetail( $cable->id );
    }
 */


/* TEST GET LIST
---------------------------------------------------------------------------- */
/* 
    public function testGetList() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;

        $o = new Cables();
        $result = $o->getList();

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'results', $result->body );
        $this->assertIsArray( $result->body->results );
        $this->assertObjectHasAttribute( 'id', $result->body->results[0] );

        // CLEAN UP
        $this->deleteDetail( $cable->id );
    }
 */


/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new Cables();
        $result = $o->postList(
            options: [[ 
                    'termination_a_type' => 'patchCables',
                    'termination_b_type' => 'patchCables',
                      'termination_a_id' => 1,
                      'termination_b_id' => 2
                ]] 
            );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $cable )
        {
            $this->deleteDetail( id: $cable->id );
        }
    }
 */


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPutDetail() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;

        $o = new Cables();
        $result = $o->putDetail( 
                            id: $cable->id, 
            termination_a_type: 'patchCables',
            termination_b_type: 'patchCables',
              termination_a_id: 1,
              termination_b_id: 2
        );
        
        
        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );

        // CLEAN UP
        $this->deleteDetail( $cable->id );
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;

        $o = new Cables();
        $result = $o->putList(
            options: [
                [ 
                                  'id'   => $cable->id, 
                    'termination_a_type' => 'patchCables',
                    'termination_b_type' => 'patchCables',
                      'termination_a_id' => 1,
                      'termination_b_id' => 2
                ]
            ]
        );
        
        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body[0] );

        // CLEAN UP
        $this->deleteDetail( $cable->id );
    }
 */


/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPatchDetail() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;

        $o = new Cables();
        $result = $o->patchDetail(
              id: $cable->id,
            termination_a_type: 'patchCables',
            termination_b_type: 'patchCables',
              termination_a_id: 1,
              termination_b_id: 2
        );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );


        // CLEAN UP
        $this->deleteDetail( $cable->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;

        $o = new Cables();
        $result = $o->patchList(
            options: [
                [ 
                                    'id' => $cable->id, 
                    'termination_a_type' => 'patchCables',
                    'termination_b_type' => 'patchCables',
                      'termination_a_id' => 1,
                      'termination_b_id' => 2
                ]
            ]
        );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body[0] );

        // CLEAN UP
        $this->deleteDetail( $cable->id );
    }
 */



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testDeleteDetail() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;
        
        $o = new Cables();
        $result = $o->deleteDetail( id: $cable->id );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $cable = $this->postDetail()->body;

        $o = new Cables();
        $result = $o->deleteList(
            options: [[ 'id' => $cable->id ]]
        );

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */

/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */
/* 
    public function postDetail() : Response
    {
        $o = new Cables();

        return $o->postDetail( 
            termination_a_type: 'circuits.circuittermination',
              termination_a_id: $_ENV['termA']->id,
            termination_b_type: 'circuits.circuittermination',
              termination_b_id: $_ENV['termZ']->id,
        );
    }
 */


/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */
/* 
    public function deleteDetail( int $id )
    {
        $o = new Cables();

        return $o->deleteDetail( id: $id  );
    }
 */


/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

/**
* @beforeClass
*/
/* 
    public static function setupTest()
    {
        $_ENV['siteA']    = self::createSite();
        $_ENV['provider'] = self::createProvider();
        $_ENV['ctype']    = self::createCircuitType();     
        $_ENV['circuit']  = self::createCircuit(
                provider: $_ENV['provider'],
            circuit_type: $_ENV['ctype']
        );
        
        $_ENV['termA'] = self::createCircuitTermination(
            circuit: $_ENV['circuit'],
               term: 'A',
               site: $_ENV['siteA']
        );
        $_ENV['termZ'] = self::createCircuitTermination(
            circuit: $_ENV['circuit'],
               term: 'Z',
               site: $_ENV['siteA']
        );
        
        $o = new Cables();
        $test = $o->postDetail( 
            termination_a_type: 'circuits.circuittermination',
              termination_a_id: $_ENV['termA'],
            termination_b_type: 'circuits.circuittermination',
              termination_b_id: $_ENV['termZ'],
        )->body;
        

        //print_r( $test );

         $o = new Cables();
        $test = $o->getDetail( id: 1 );
        print_r( $test->body); 
    */

 
/*
    public static function setupTest()
    {
        $_ENV['siteA']     = self::createSite();
        $_ENV['siteB']     = self::createSite();
        $_ENV['manf']      = self::createManufacturer();
        $_ENV['tenant']    = self::createTenant();
        $_ENV['devtype']   = self::createDeviceType( manf: $_ENV['manf'] );
        $_ENV['locationA'] = self::createLocation( site: $_ENV['siteA'] );
        $_ENV['locationB'] = self::createLocation( site: $_ENV['siteB'] );
        $_ENV['devrole']   = self::createDeviceRole();
        $_ENV['vcA']       = self::createVirtualChassis();
        $_ENV['vcB']       = self::createVirtualChassis();
        $_ENV['rackA']     = self::createRack( 
            site: $_ENV['siteA'], location: $_ENV['locationA'] 
        );
        $_ENV['rackB']     = self::createRack( 
            site: $_ENV['siteB'], location: $_ENV['locationB'] 
        );
        $_ENV['deviceA']   = self::createDevice(
                       site: $_ENV['siteA'],
                     tenant: $_ENV['tenant'],
                 devicetype: $_ENV['devtype'],
                 devicerole: $_ENV['devrole'],
            virtual_chassis: $_ENV['vcA'],
                       rack: $_ENV['rackA']
        );

        $_ENV['deviceB']   = self::createDevice(
                       site: $_ENV['siteB'],
                     tenant: $_ENV['tenant'],
                 devicetype: $_ENV['devtype'],
                 devicerole: $_ENV['devrole'],
            virtual_chassis: $_ENV['vcB'],
                       rack: $_ENV['rackB']
        );
        $_ENV['interfaceA'] = self::createInterface(
            device: $_ENV['deviceA']
        );
        $_ENV['interfaceB'] = self::createInterface(
            device: $_ENV['deviceB']
        );
    }
*/
    
/*
---------------------------------------------------------------------------- */

/*  
    public static function tearDownAfterClass() : void
    {
        self::destroyCircuitTermination( $_ENV['termZ'] );
        self::destroyCircuitTermination( $_ENV['termA'] );
        self::destroyCircuit( $_ENV['circuit'] );
        self::destroyProvider( $_ENV['provider'] );
        self::destroyCircuitType( $_ENV['ctype'] );
        self::destroySite( site: $_ENV['siteA'] );
        sleep(1);
    }
     */
/*
---------------------------------------------------------------------------- */

 
/*
    public static function closeTest()
    {
        self::destroyInterface( interface: $_ENV['interfaceB'] );
        self::destroyInterface( interface: $_ENV['interfaceA'] );
        self::destroyDevice( device: $_ENV['deviceB'] );
        self::destroyDevice( device: $_ENV['deviceA'] );
        self::destroyRack( rack: $_ENV['rackB'] );
        self::destroyRack( rack: $_ENV['rackA'] );
        self::destroyVirtualChassis( chassis: $_ENV['vcB'] );
        self::destroyVirtualChassis( chassis: $_ENV['vcA'] );
        self::destroyDeviceRole( devrole: $_ENV['devrole'] );
        self::destroyLocation( location: $_ENV['locationB'] );
        self::destroyLocation( location: $_ENV['locationA'] );
        self::destroyDeviceType( devtype: $_ENV['devtype'] );
        self::destroyTenant( tenant: $_ENV['tenant'] );
        self::destroyManufacturer( manf: $_ENV['manf'] );
        self::destroySite( site: $_ENV['siteB'] );
        self::destroySite( site: $_ENV['siteA'] );

        unset( $_ENV['rackA'] );
        unset( $_ENV['rackB'] );
        unset( $_ENV['vcB'] );
        unset( $_ENV['vcA'] );
        unset( $_ENV['locationA'] );
        unset( $_ENV['locationB'] );
        unset( $_ENV['devtype'] );
        unset( $_ENV['tenant'] );
        unset( $_ENV['manf'] );
        unset( $_ENV['siteA'] );
        unset( $_ENV['siteB'] );
        unset( $_ENV['deviceB'] );
        unset( $_ENV['deviceA'] );
        unset( $_ENV['interfaceB'] );
        unset( $_ENV['interfaceA'] );
    }
*/

    
/*
---------------------------------------------------------------------------- */

 /*
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
    }
    */
}