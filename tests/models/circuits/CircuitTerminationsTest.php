<?php 

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\testCore;
use Cruzio\Netbox\Options\Circuits\CircuitTerminations AS Options;

require_once __DIR__ . '/../testCore.php';

class CircuitTerminationsTest extends testCore
{
    public Options $options;
    public static $circuit_type;
    public static $provider;
    public static $site;
    public static $circuit;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new CircuitTerminations();
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
        $term = $this->postDetail()['body'];

        $o = new CircuitTerminations();
        $result = $o->getDetail( id: $term->id );   
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTerminations();
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
        $this->deleteDetail( $term->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new CircuitTerminations();
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
/* 
    // GETTING: A circuit termination must attach to either a site or a provider network.
    public function testPostList() :void
    {
        $o = new CircuitTerminations();
        $result = $o->postList( options: [ $this->options ] );
        print_r( $result['body']);

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );

        //CLEAN UP
        foreach( $result['body'] AS $term )
        {
            $this->deleteDetail( id: $term->id );
        }
    }
 */


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTerminations();
        $result = $o->putDetail( 
                   id: $term->id, 
            term_side: 'A',
              circuit: self::$circuit->id,   
              options: $this->options
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
        $this->deleteDetail( $term->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        $this->options->id = $term->id;

        $o = new CircuitTerminations();
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
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTerminations();
        $result = $o->patchDetail(
                   id: $term->id, 
            term_side: 'A',
              circuit: self::$circuit->id,
              options: $this->options
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
        $this->deleteDetail( $term->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];

        $o = new CircuitTerminations();
        $result = $o->patchList(
            options: [
                [ 
                           'id' => $term->id,
                    'term_side' => 'A',
                      'circuit' => self::$circuit->id,
                     'options'  => $this->options
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
        $this->deleteDetail( $term->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $term = $this->postDetail()['body'];
        
        $o = new CircuitTerminations();
        $result = $o->deleteDetail( id: $term->id );

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
        $term = $this->postDetail()['body'];

        $o = new CircuitTerminations();
        $result = $o->deleteList(
            options: [[ 'id' => $term->id ]]
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
        $o = new CircuitTerminations();

        return $o->postDetail( 
            term_side: 'A',
              circuit: self::$circuit->id,
              options: $this->options
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new CircuitTerminations();

        return $o->deleteDetail( id: $id  );
    }



/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$provider     = self::createProvider();
        self::$circuit_type = self::createCircuitType();
        self::$site         = self::createSite();
        self::$circuit      = self::createCircuit(
                provider: self::$provider,
            circuit_type: self::$circuit_type
        );
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyCircuit( circuit: self::$circuit );
        self::destroyProvider( provider: self::$provider );
        self::destroyCircuitType( ct: self::$circuit_type );
        self::destroySite( site: self::$site );
    }

    public function setUp() : void
    {
        $this->options = new Options();
        $this->options->term_side = 'A';
        $this->options->circuit   = self::$circuit->id;
        $this->options->site      = self::$site->id;
    }
}