<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\Asns;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class AsnsTest extends TestIPAM
{
    public static object $rir;

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsAsn() : void
    {
        $o = new Asns();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateAsnBad() : void
    {
        $o = new Asns();
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
    public function testCreateAsn() : int
    {
        $result = self::createAsn( rir_id: self::$rir->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateAsn')]
    public function testGetAsn( int $id ) : void
    {
        $o = new Asns();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListAsn() : void
    {
        $o = new Asns();
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
    #[Depends('testCreateAsn')]
    public function testReplaceAsnBad( int $id ) : void
    {
        $o = new Asns();
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
    #[Depends('testCreateAsn')]
    public function testReplaceAsn( int $id ) : void
    {
        $o = new Asns();
        $result = $o->replace( data: [
            'description' => 'PHPUnit_Replace',
            'asn' => 12345,
            'rir' => self::$rir->id
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
    #[Depends('testCreateAsn')]
    public function testUpdateAsn( int $id ) : void
    {
        $o = new Asns();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateAsn')]
    public function testDeleteAsn( int $id ) : void
    {
        $o = new Asns();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }



    /* SETUP
    ---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function setUpBeforeClass() : void
    {
        self::$rir = self::createRir();
    }


    /* TEAR DOWN
    ---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeRir( id: self::$rir->id );
    }
}