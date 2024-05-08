<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\PowerPanels;
use Cruzio\lib\Netbox\Data\DCIM\PowerPanels as Data;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class PowerPanelsTest extends TestDCIM
{
    public static object $site;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsPowerPanel() : void
    {
        $o = new PowerPanels();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreatePowerPanelBad() : void
    {
        $o = new PowerPanels();
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
    public function testCreatePowerPanel() : int
    {
        $o = new PowerPanels();
        $d = new Data();

        $result = self::createPowerPanel( site_id: self::$site->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreatePowerPanel')]
    public function testGetPowerPanel( int $id ) : void
    {
        $o = new PowerPanels();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListPowerPanel() : void
    {
        $o = new PowerPanels();
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
    #[Depends('testCreatePowerPanel')]
    public function testReplacePowerPanelBad( int $id ) : void
    {
        $o = new PowerPanels();

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
    #[Depends('testCreatePowerPanel')]
    public function testReplacePowerPanel( int $id ) : void
    {
        $o = new PowerPanels();

        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
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
    #[Depends('testCreatePowerPanel')]
    public function testUpdatePowerPanel( int $id ) : void
    {
        $o = new PowerPanels();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreatePowerPanel')]
    public function testDeletePowerPanel( int $id ) : void
    {
        $o = new PowerPanels();
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