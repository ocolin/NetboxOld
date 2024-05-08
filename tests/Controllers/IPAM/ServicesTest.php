<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

require_once __DIR__ . '/../DCIM/TestDCIM.php';

use Cruzio\lib\Netbox\Controllers\IPAM\Services;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\DCIM\TestDCIM;

final class ServicesTest extends TestIPAM
{
    public static object $group;
    public static object $device;
    public static object $site;
    public static object $role;
    public static object $type;
    public static object $manufacturer;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsService() : void
    {
        $o = new Services();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateServiceBad() : void
    {
        $o = new Services();
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
    public function testCreateService() : int
    {
        $result = self::createService( device_id: self::$device->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateService')]
    public function testGetService( int $id ) : void
    {
        $o = new Services();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListService() : void
    {
        $o = new Services();
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
    #[Depends('testCreateService')]
    public function testReplaceServiceBad( int $id ) : void
    {
        $o = new Services();
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
    #[Depends('testCreateService')]
    public function testReplaceService( int $id ) : void
    {
        $o = new Services();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'device' => self::$device->id,
            'ports' => [1],
            'protocol' => 'tcp'
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
    #[Depends('testCreateService')]
    public function testUpdateService( int $id ) : void
    {
        $o = new Services();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateService')]
    public function testDeleteService( int $id ) : void
    {
        $o = new Services();
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
        self::$group = self::createFhrpGroup();
        self::$site = TestDCIM::createSite();
        self::$manufacturer = TestDCIM::createManufacturer();
        self::$type = TestDCIM::createDeviceType( manf_id: self::$manufacturer->id );
        self::$role = TestDCIM::createDeviceRole();
        self::$device = TestDCIM::createDevice(
            site_id: self::$site->id,
            devtype_id: self::$type->id,
            role_id: self::$role->id
        );
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        TestDCIM::removeDevice( id: self::$device->id );
        TestDCIM::removeDeviceRole( id: self::$role->id );
        TestDCIM::removeDeviceType( id: self::$type->id );
        TestDCIM::removeManufacturer( id: self::$manufacturer->id );
        TestDCIM::removeSite( id: self::$site->id );
        self::removeFhrpGroup( id: self::$group->id );
    }
}