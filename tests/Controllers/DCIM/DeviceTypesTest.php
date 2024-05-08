<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\DeviceTypes;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class DeviceTypesTest extends TestDCIM
{
    public static object $manufacturer;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsDeviceType() : void
    {
        $o = new DeviceTypes();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateDeviceTypeBad() : void
    {
        $o = new DeviceTypes();
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
    public function testCreateDeviceType() : int
    {
        $result = self::createDeviceType( manf_id: self::$manufacturer->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateDeviceType')]
    public function testGetDeviceType( int $id ) : void
    {
        $o = new DeviceTypes();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListDeviceType() : void
    {
        $o = new DeviceTypes();
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
    #[Depends('testCreateDeviceType')]
    public function testReplaceDeviceTypeBad( int $id ) : void
    {
        $o = new DeviceTypes();

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
    #[Depends('testCreateDeviceType')]
    public function testReplaceDeviceType( int $id ) : void
    {
        $o = new DeviceTypes();

        $result = $o->replace( data: [
            'model' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace',
            'manufacturer' => self::$manufacturer->id
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
    #[Depends('testCreateDeviceType')]
    public function testUpdateDeviceType( int $id ) : void
    {
        $o = new DeviceTypes();
        $result = $o->update( data: [
            'model' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateDeviceType')]
    public function testDeleteDeviceType( int $id ) : void
    {
        $o = new DeviceTypes();
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
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeManufacturer( self::$manufacturer->id );
    }
}