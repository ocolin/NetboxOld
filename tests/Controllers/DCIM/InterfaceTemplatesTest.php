<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\InterfaceTemplates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class InterfaceTemplatesTest extends TestDCIM
{
    public static object $devtype;
    public static object $manufacturer;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsInterfaceTemplate() : void
    {
        $o = new InterfaceTemplates();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateInterfaceTemplateBad() : void
    {
        $o = new InterfaceTemplates();
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
    public function testCreateInterfaceTemplate() : int
    {
        $result = self::createInterfaceTemplate( devtype_id: self::$devtype->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateInterfaceTemplate')]
    public function testGetInterfaceTemplate( int $id ) : void
    {
        $o = new InterfaceTemplates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListInterfaceTemplate() : void
    {
        $o = new InterfaceTemplates();
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
    #[Depends('testCreateInterfaceTemplate')]
    public function testReplaceInterfaceTemplateBad( int $id ) : void
    {
        $o = new InterfaceTemplates();
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
    #[Depends('testCreateInterfaceTemplate')]
    public function testReplaceInterfaceTemplate( int $id ) : void
    {
        $o = new InterfaceTemplates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'device_type' => self::$devtype->id,
            'type' => 'other'
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
    #[Depends('testCreateInterfaceTemplate')]
    public function testUpdateInterfaceTemplate( int $id ) : void
    {
        $o = new InterfaceTemplates();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateInterfaceTemplate')]
    public function testDeleteInterfaceTemplate( int $id ) : void
    {
        $o = new InterfaceTemplates();
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