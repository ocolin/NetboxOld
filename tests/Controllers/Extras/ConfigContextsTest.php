<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Extras\ConfigContexts;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ConfigContextsTest extends TestExtras
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsConfigContext() : void
    {
        $o = new ConfigContexts();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateConfigContextBad() : void
    {
        $o = new ConfigContexts();
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
    public function testCreateConfigContext() : int
    {
        $result = self::createConfigContext();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateConfigContext')]
    public function testGetConfigContext( int $id ) : void
    {
        $o = new ConfigContexts();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListConfigContext() : void
    {
        $o = new ConfigContexts();
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
    #[Depends('testCreateConfigContext')]
    public function testReplaceConfigContextBad( int $id ) : void
    {
        $o = new ConfigContexts();
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
    #[Depends('testCreateConfigContext')]
    public function testReplaceConfigContext( int $id ) : void
    {
        $o = new ConfigContexts();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'data' => [ 'foo' => '123' ]
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
    #[Depends('testCreateConfigContext')]
    public function testUpdateConfigContext( int $id ) : void
    {
        $o = new ConfigContexts();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateConfigContext')]
    public function testDeleteConfigContext( int $id ) : void
    {
        $o = new ConfigContexts();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}