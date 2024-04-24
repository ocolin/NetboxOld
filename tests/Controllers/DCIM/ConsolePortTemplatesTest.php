<?php

// NEED A DEVICE OR A MODULE

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\DCIM\ConsolePortTemplates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ConsolePortTemplatesTest extends TestDCIM
{
    public static object $devtype;
    public static object $manufacturer;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsConsolePortTemplate() : void
    {
        $o = new ConsolePortTemplates();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateConsolePortTemplateBad() : void
    {
        $o = new ConsolePortTemplates();
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
    public function testCreateConsolePortTemplate() : int
    {
        $result = self::createConsolePortTemplate( devtype_id: self::$devtype->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateConsolePortTemplate')]
    public function testGetConsolePortTemplate( int $id ) : void
    {
        $o = new ConsolePortTemplates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListConsolePortTemplate() : void
    {
        $o = new ConsolePortTemplates();
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
    #[Depends('testCreateConsolePortTemplate')]
    public function testReplaceConsolePortTemplateBad( int $id ) : void
    {
        $o = new ConsolePortTemplates();
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
    #[Depends('testCreateConsolePortTemplate')]
    public function testReplaceConsolePortTemplate( int $id ) : void
    {
        $o = new ConsolePortTemplates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'device_type' => self::$devtype->id
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
    #[Depends('testCreateConsolePortTemplate')]
    public function testUpdateConsolePortTemplate( int $id ) : void
    {
        $o = new ConsolePortTemplates();
        $result = $o->update( data: [ 'name' => 'PHPUnit_Update' ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateConsolePortTemplate')]
    public function testDeleteConsolePortTemplate( int $id ) : void
    {
        $o = new ConsolePortTemplates();
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