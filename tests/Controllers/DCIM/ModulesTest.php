<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\Modules;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ModulesTest extends TestDCIM
{
    public static object $site;
    public static object $devtype;
    public static object $manufacturer;
    public static object $devrole;
    public static object $device;
    public static object $modbay;
    public static object $modtype;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsModule() : void
    {
        $o = new Modules();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateModuleBad() : void
    {
        $o = new Modules();
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
    public function testCreateModule() : int
    {
        $result = self::createModule(
            device_id: self::$device->id,
            modbay_id: self::$modbay->id,
            modtype_id: self::$modtype->id
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateModule')]
    public function testGetModule( int $id ) : void
    {
        $o = new Modules();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListModule() : void
    {
        $o = new Modules();
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
    #[Depends('testCreateModule')]
    public function testReplaceModuleBad( int $id ) : void
    {
        $o = new Modules();
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
    #[Depends('testCreateModule')]
    public function testReplaceModule( int $id ) : void
    {
        $o = new Modules();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'device' => self::$device->id,
            'module_bay' => self::$modbay->id,
            'module_type' => self::$modtype->id
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
    #[Depends('testCreateModule')]
    public function testUpdateModule( int $id ) : void
    {
        $o = new Modules();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateModule')]
    public function testDeleteModule( int $id ) : void
    {
        $o = new Modules();
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
        self::$modbay = self::createModuleBay( device_id: self::$device->id );
        self::$modtype = self::createModuleType( manf_id: self::$manufacturer->id );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeModuleType( id: self::$modtype->id );
        self::removeModuleBay( id: self::$modbay->id );
        self::removeDevice( id: self::$device->id );
        self::removeDeviceRole( id: self::$devrole->id );
        self::removeDeviceType( id: self::$devtype->id );
        self::removeManufacturer( id: self::$manufacturer->id );
        self::removeSite( self::$site->id );
    }
}