<?php 

declare( strict_types = 1 );

namespace Tests\Models\Circuits;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\Circuits\CircuitTerminations;
use Cruzio\lib\Netbox\Data\Circuits\CircuitTerminations AS Data;

require_once __DIR__ . '/../testCore.php';

final class CircuitTerminationsTest extends testCore
{
    public static object $circuit_type;
    public static object $provider;
    public static object $site;
    public static object $circuit;


/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new CircuitTerminations();
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

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function testPostDetail() : int
    {
        $o = new CircuitTerminations();
        $d = new Data();
        $d->set( 'circuit', self::$circuit->id );
        $d->set( 'term_side', 'A' );
        $d->set( 'site', self::$site->id );
        $result = $o->post( data: $d );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        return $result->body->id;
    }
 


/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testDeleteDetail( int $id ) : void
    {
        $o = new CircuitTerminations();
        $result = $o->delete( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 

/* SETUP
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
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
    
/* TEAR DOWN
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public static function tearDownAfterClass() : void
    {
        self::destroyCircuit( circuit: self::$circuit );
        self::destroyProvider( provider: self::$provider );
        self::destroyCircuitType( ct: self::$circuit_type );
        self::destroySite( site: self::$site );
        sleep(1);
    }
    

/* TEST GET DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testGetDetail() : void
    {
        // SETUP
        $term = $this->postDetail()->body;

        $o = new CircuitTerminations();
        $result = $o->getDetail( id: $term->id );   
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }
  */


/* TEST GET LIST
---------------------------------------------------------------------------- */
/* 
    public function testGetList() : void
    {
        // SETUP
        $term = $this->postDetail()->body;

        $o = new CircuitTerminations();
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
        $this->deleteDetail( $term->id );
    }
 */


/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    // GETTING: A circuit termination must attach to either a site or a provider network.
    public function testPostList() :void
    {
        $o = new CircuitTerminations();
        $result = $o->postList( options: [ $this->options ] );
        print_r( $result->body);

        $this->assertIsArray( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $term )
        {
            $this->deleteDetail( id: $term->id );
        }
    }
 */


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPutDetail() : void
    {
        // SETUP
        $term = $this->postDetail()->body;

        $o = new CircuitTerminations();
        $result = $o->putDetail( 
                   id: $term->id, 
            term_side: 'A',
              circuit: self::$circuit->id,   
              options: $this->options
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
        $this->deleteDetail( $term->id );
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $term = $this->postDetail()->body;
        $this->options->id = $term->id;

        $o = new CircuitTerminations();
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
        $this->deleteDetail( $term->id );
    }
 */


/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPatchDetail() : void
    {
        // SETUP
        $term = $this->postDetail()->body;

        $o = new CircuitTerminations();
        $result = $o->patchDetail(
                   id: $term->id, 
            term_side: 'A',
              circuit: self::$circuit->id,
              options: $this->options
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
        $this->deleteDetail( $term->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $term = $this->postDetail()->body;

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

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $term->id );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $term = $this->postDetail()->body;

        $o = new CircuitTerminations();
        $result = $o->deleteList(
            options: [[ 'id' => $term->id ]]
        );

        $this->assertIsObject( $result );
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
        $o = new CircuitTerminations();

        return $o->postDetail( 
            term_side: 'A',
              circuit: self::$circuit->id,
              options: $this->options
        );
    }
 */


/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */
/* 
    public function deleteDetail( int $id )
    {
        $o = new CircuitTerminations();

        return $o->deleteDetail( id: $id  );
    }
 */
}