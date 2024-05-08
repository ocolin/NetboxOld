<?php

declare( strict_types = 1 );

namespace Tests\Models\Circuits;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\Circuits\CircuitTypes;
use Cruzio\lib\Netbox\Data\Circuits\CircuitTypes AS Data;

require_once __DIR__ . '/../testCore.php';

final class CircuitTypesTest extends testCore
{

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new CircuitTypes();
        $type = $o->options();

        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 200, $type->status );
        $this->assertIsArray( $type->headers );
        $this->assertIsObject( $type->body );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function testPostDetail() : int
    {
        $o = new CircuitTypes();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_CircuitType-Post' );
        $d->set( 'slug', 'PHPUnit_CircuitType-Post' );
        $type = $o->post( data: $d );

        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 201, $type->status );
        $this->assertIsArray( $type->headers );
        $this->assertIsObject( $type->body );

        return $type->body->id;
    }



/* TEST GET LIST
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetList() : void
    {
        $o = new CircuitTypes();
        $type = $o->get();

        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 200, $type->status );
        $this->assertIsArray( $type->headers );
        $this->assertIsObject( $type->body );
        $this->assertObjectHasProperty( 'results', $type->body );
        if( isset( $result->body->results )) {
            $this->assertIsArray( $type->body->results );
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
        $o = new CircuitTypes();
        $type = $o->get( id: $id );
        
        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 200, $type->status );
        $this->assertIsArray( $type->headers );
        $this->assertIsObject( $type->body );
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
        $o = new CircuitTypes();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_CircuitType-Put' );
        $d->set( 'slug', 'PHPUnit_CircuitType-Put' );
        $type = $o->put( data: $d,id: $id );
        
        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 200, $type->status );
        $this->assertIsArray( $type->headers );
        $this->assertIsObject( $type->body );
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
        $o = new CircuitTypes();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_CircuitType-Patch' );
        $type = $o->patch( data: $d,id: $id );

        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 200, $type->status );
        $this->assertIsArray( $type->headers );
        $this->assertIsObject( $type->body );
    }
 

/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testDeleteDetail( int $id ) : void
    {
        $o = new CircuitTypes();
        $type = $o->delete( id: $id );

        $this->assertIsObject( $type );
        $this->assertObjectHasProperty( 'status',  $type );
        $this->assertObjectHasProperty( 'headers', $type );
        $this->assertObjectHasProperty( 'body',    $type );
        $this->assertIsInt( $type->status );
        $this->assertEquals( 204, $type->status );
    }

}