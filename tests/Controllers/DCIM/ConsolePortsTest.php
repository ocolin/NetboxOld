<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\ConsolePorts;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ConsolePortsTest extends TestDCIM
{
    public static object $site;
    public static object $devtype;
    public static object $manufacturer;
    public static object $devrole;
    public static object $device;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsConsolePort() : void
    {
        $o = new ConsolePorts();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateConsolePortBad() : void
    {
        $o = new ConsolePorts();
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
    public function testCreateConsolePort() : int
    {
        $result = self::createConsolePort( device_id: self::$device->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateConsolePort')]
    public function testGetConsolePort( int $id ) : void
    {
        $o = new ConsolePorts();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListConsolePort() : void
    {
        $o = new ConsolePorts();
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
    #[Depends('testCreateConsolePort')]
    public function testReplaceConsolePortBad( int $id ) : void
    {
        $o = new ConsolePorts();

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
    #[Depends('testCreateConsolePort')]
    public function testReplaceConsolePort( int $id ) : void
    {
        $o = new ConsolePorts();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'device' => self::$device->id,
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
    #[Depends('testCreateConsolePort')]
    public function testUpdateConsolePort( int $id ) : void
    {
        $o = new ConsolePorts();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateConsolePort')]
    public function testDeleteConsolePort( int $id ) : void
    {
        $o = new ConsolePorts();
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
        self::$manufacturer = self::createManufacturer();
        self::$devtype = self::createDeviceType( manf_id: self::$manufacturer->id );
        self::$devrole = self::createDeviceRole();
        self::$device = self::createDevice(
            site_id: self::$site->id,
            devtype_id: self::$devtype->id,
            role_id: self::$devrole->id
        );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeDevice( id: self::$device->id );
        self::removeDeviceRole( id: self::$devrole->id );
        self::removeDeviceType( id: self::$devtype->id );
        self::removeManufacturer( id: self::$manufacturer->id );
        self::removeSite( self::$site->id );
    }
}