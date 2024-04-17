<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\DeviceBayTemplates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class DeviceBayTemplatesTest extends TestDCIM
{
    public static object $devtype;
    public static object $manufacturer;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsDeviceBayTemplate() : void
    {
        $o = new DeviceBayTemplates();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateDeviceBayTemplateBad() : void
    {
        $o = new DeviceBayTemplates();
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
    public function testCreateDeviceBayTemplate() : int
    {
        $result = self::createDeviceBayTemplate( devtype_id: self::$devtype->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateDeviceBayTemplate')]
    public function testGetConsolePort( int $id ) : void
    {
        $o = new DeviceBayTemplates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListConsolePort() : void
    {
        $o = new DeviceBayTemplates();
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
    #[Depends('testCreateDeviceBayTemplate')]
    public function testReplaceDeviceBayTemplateBad( int $id ) : void
    {
        $o = new DeviceBayTemplates();
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
    #[Depends('testCreateDeviceBayTemplate')]
    public function testReplaceDeviceBayTemplate( int $id ) : void
    {
        $o = new DeviceBayTemplates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'device_type' => self::$devtype->id,
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
    #[Depends('testCreateDeviceBayTemplate')]
    public function testUpdateDeviceBayTemplate( int $id ) : void
    {
        $o = new DeviceBayTemplates();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateDeviceBayTemplate')]
    public function testDeleteDeviceBayTemplate( int $id ) : void
    {
        $o = new DeviceBayTemplates();
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
        self::$manufacturer = self::createManufacturer();
        self::$devtype = self::createDeviceType( manf_id: self::$manufacturer->id );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeDeviceType( id: self::$devtype->id );
        self::removeManufacturer( id: self::$manufacturer->id );
    }
}