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



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    #[Depends('testPostDetail')]
    public function testGetDetail( int $id ) : void
    {

        $o = new CircuitTerminations();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetList() : void
        {
            $o = new CircuitTerminations();
            $result = $o->get();

            $this->assertIsObject( $result );
            $this->assertObjectHasProperty( 'status',  $result );
            $this->assertObjectHasProperty( 'headers', $result );
            $this->assertObjectHasProperty( 'body',    $result );
            $this->assertIsInt( $result->status );
            $this->assertEquals( 200, $result->status );
            $this->assertIsArray( $result->headers );
            $this->assertIsObject( $result->body );
            $this->assertIsArray( $result->body->results );
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
}