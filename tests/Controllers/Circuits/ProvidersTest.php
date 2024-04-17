<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers\Circuits\Providers;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ProvidersTest extends TestCircuits
{

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsProvider() : void
    {
        $o = new Providers();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateProviderBad() : void
    {
        $o = new Providers();
        $result = $o->create( data: [] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


    /* CREATE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public function testCreateProvider() : int
    {
        $result = self::createProvider();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateProvider')]
    public function testGetProvider( int $id ) : void
    {
        $o = new Providers();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListProvider() : void
    {
        $o = new Providers();
        $result = $o->get();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'count', $result );
        $this->assertObjectHasProperty( 'next', $result );
        $this->assertObjectHasProperty( 'previous', $result );
        $this->assertObjectHasProperty( 'results', $result );
        $this->assertIsArray( $result->results );
        $this->assertIsObject( $result->results[0] );
        $this->assertObjectHasProperty( 'id', $result->results[0] );
    }


    /* BAD REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateProvider')]
    public function testReplaceProviderBad( int $id ) : void
    {
        $o = new Providers();
        $result = $o->replace( data: [], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


    /* REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateProvider')]
    public function testReplaceProvider( int $id ) : void
    {
        $o = new Providers();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* UPDATE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateProvider')]
    public function testUpdateProvider( int $id ) : void
    {
        $o = new Providers();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateProvider')]
    public function testDeleteProvider( int $id ) : void
    {
        $o = new Providers();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}