<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\Prefixes;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class PrefixesTest extends TestIPAM
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsPrefix() : void
    {
        $o = new Prefixes();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreatePrefixBad() : void
    {
        $o = new Prefixes();
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
    public function testCreatePrefix() : int
    {
        $result = self::createPrefix();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreatePrefix')]
    public function testGetPrefix( int $id ) : void
    {
        $o = new Prefixes();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListPrefix() : void
    {
        $o = new Prefixes();
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
    #[Depends('testCreatePrefix')]
    public function testReplacePrefixBad( int $id ) : void
    {
        $o = new Prefixes();
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
    #[Depends('testCreatePrefix')]
    public function testReplacePrefix( int $id ) : void
    {
        $o = new Prefixes();
        $result = $o->replace( data: [
            'prefix' => '192.168.1.0/24',
            'description' => 'PHPUnit_Replace',
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
    #[Depends('testCreatePrefix')]
    public function testUpdatePrefix( int $id ) : void
    {
        $o = new Prefixes();
        $result = $o->update( data: [
            'description' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreatePrefix')]
    public function testDeletePrefix( int $id ) : void
    {
        $o = new Prefixes();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}