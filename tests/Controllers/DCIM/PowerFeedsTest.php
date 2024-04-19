<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\PowerFeeds;
use Cruzio\lib\Netbox\Data\DCIM\PowerFeeds as Data;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class PowerFeedsTest extends TestDCIM
{
    public static object $site;
    public static object $panel;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsPowerFeed() : void
    {
        $o = new PowerFeeds();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreatePowerFeedBad() : void
    {
        $o = new PowerFeeds();
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
    public function testCreatePowerFeed() : int
    {
        $o = new PowerFeeds();
        $d = new Data();

        $result = self::createPowerFeed( panel_id: self::$panel->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreatePowerFeed')]
    public function testGetPowerFeed( int $id ) : void
    {
        $o = new PowerFeeds();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListPowerFeed() : void
    {
        $o = new PowerFeeds();
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
    #[Depends('testCreatePowerFeed')]
    public function testReplacePowerFeedBad( int $id ) : void
    {
        $o = new PowerFeeds();

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
    #[Depends('testCreatePowerFeed')]
    public function testReplacePowerFeed( int $id ) : void
    {
        $o = new PowerFeeds();

        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'power_panel' => self::$panel->id
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
    #[Depends('testCreatePowerFeed')]
    public function testUpdatePowerFeed( int $id ) : void
    {
        $o = new PowerFeeds();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreatePowerFeed')]
    public function testDeletePowerFeed( int $id ) : void
    {
        $o = new PowerFeeds();
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
        self::$panel = self::createPowerPanel( site_id: self::$site->id );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removePowerPanel( id: self::$panel->id );
        self::removeSite( self::$site->id );
    }
}