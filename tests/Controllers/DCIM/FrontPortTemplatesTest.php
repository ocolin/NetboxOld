<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\FrontPortTemplates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class FrontPortTemplatesTest extends TestDCIM
{
    public static object $devtype;
    public static object $manufacturer;
    public static object $rear;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsFrontPortTemplate() : void
    {
        $o = new FrontPortTemplates();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateFrontPortTemplateBad() : void
    {
        $o = new FrontPortTemplates();
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
    public function testCreateFrontPortTemplate() : int
    {
        $result = self::createFrontPortTemplate(
            type_id: self::$devtype->id,
            rear_id: self::$rear->id
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateFrontPortTemplate')]
    public function testGetFrontPortTemplate( int $id ) : void
    {
        $o = new FrontPortTemplates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListFrontPortTemplate() : void
    {
        $o = new FrontPortTemplates();
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
    #[Depends('testCreateFrontPortTemplate')]
    public function testReplaceFrontPortTemplateBad( int $id ) : void
    {
        $o = new FrontPortTemplates();
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
    #[Depends('testCreateFrontPortTemplate')]
    public function testReplaceFrontPortTemplate( int $id ) : void
    {
        $o = new FrontPortTemplates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'type' => '8p8c',
            'device_type' => self::$devtype->id,
            'rear_port' => self::$rear->id
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
    #[Depends('testCreateFrontPortTemplate')]
    public function testUpdateFrontPortTemplate( int $id ) : void
    {
        $o = new FrontPortTemplates();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateFrontPortTemplate')]
    public function testDeleteFrontPortTemplate( int $id ) : void
    {
        $o = new FrontPortTemplates();
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
        self::$rear = self::createRearPortTemplate( type_id: self::$devtype->id );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeRearPortTemplate( id: self::$rear->id );
        self::removeDeviceType( id: self::$devtype->id );
        self::removeManufacturer( id: self::$manufacturer->id );
    }
}