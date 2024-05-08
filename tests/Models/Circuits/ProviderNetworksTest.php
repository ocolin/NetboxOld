<?php 

declare( strict_types = 1 );

namespace Tests\Models\Circuits;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\Circuits\ProviderNetworks;
use Cruzio\lib\Netbox\Data\Circuits\ProviderNetworks AS Data;

require_once __DIR__ . '/../testCore.php';

final class ProviderNetworksTest extends testCore
{
    public static object $provider;


/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new ProviderNetworks();
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
        $o = new ProviderNetworks();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_ProviderNetworks-Post' );
        $d->set( 'provider', self::$provider->id );
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



/* TEST GET LIST
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetList() : void
    {
        $o = new ProviderNetworks();
        $result = $o->get();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasProperty( 'results', $result->body );
        if( isset( $result->body->results )) {
            $this->assertIsArray($result->body->results);
        }
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testGetDetail( int $id ) : void
    {
        $o = new ProviderNetworks();
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



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */

    #[Depends('testPostDetail')]
    public function testPutDetail( int $id ) : void
    {
        $o = new ProviderNetworks();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_ProviderNetworks-Put' );
        $d->set( 'provider', self::$provider->id );
        $result = $o->put( data: $d, id: $id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */

    #[Depends('testPostDetail')]
    public function testPatchDetail( int $id ) : void
    {
        $o = new ProviderNetworks();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_ProviderNetworks-Patch' );
        $result = $o->patch( data: $d, id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testDeleteDetail( int $id ) : void
    {
        $o = new ProviderNetworks();
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
        self::$provider = self::createProvider();
    }

    
/* TEAR DOWN
---------------------------------------------------------------------------- */


    /**
     * @throws GuzzleException
     */
    public static function tearDownAfterClass() : void
    {
        self::destroyProvider( provider: self::$provider );
        sleep(1);
    }
}