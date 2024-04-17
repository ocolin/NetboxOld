<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\Locations;
use Cruzio\lib\Netbox\Data\DCIM\Locations as Data;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class LocationsTest extends TestDCIM
{
    public static object $site;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsLocation() : void
    {
        $o = new Locations();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateLocationBad() : void
    {
        $o = new Locations();
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
    public function testCreateLocation() : int
    {
        $o = new Locations();
        $d = new Data();

        $result = self::createLocation( site_id: self::$site->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateLocation')]
    public function testGetLocation( int $id ) : void
    {
        $o = new Locations();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListLocation() : void
    {
        $o = new Locations();
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
    #[Depends('testCreateLocation')]
    public function testReplaceLocationBad( int $id ) : void
    {
        $o = new Locations();

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
    #[Depends('testCreateLocation')]
    public function testReplaceLocation( int $id ) : void
    {
        $o = new Locations();

        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace',
            'site' => self::$site->id
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
    #[Depends('testCreateLocation')]
    public function testUpdateLocation( int $id ) : void
    {
        $o = new Locations();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateLocation')]
    public function testDeleteLocation( int $id ) : void
    {
        $o = new Locations();
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
        self::$site = self::createSite();
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeSite( self::$site->id );
    }
}