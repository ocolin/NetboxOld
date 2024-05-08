<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Wireless;

require_once __DIR__ . '/../DCIM/TestDCIM.php';

use Cruzio\lib\Netbox\Controllers\Wireless\WirelessLinks;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\DCIM\TestDCIM;

final class WirelessLinksTest extends TestWireless
{
    public static object $siteA;
    public static object $siteB;
    public static object $manf;
    public static object $deviceType;
    public static object $deviceRole;
    public static object $deviceA;
    public static object $deviceB;
    public static object $interfaceA;
    public static object $interfaceB;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsWirelessLink() : void
    {
        $o = new WirelessLinks();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateWirelessLinkBad() : void
    {
        $o = new WirelessLinks();
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
    public function testCreateWirelessLink() : int
    {
        $result = self::createWirelessLink(
            interfaceA: self::$interfaceA->id,
            interfaceB: self::$interfaceB->id,
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateWirelessLink')]
    public function testGetWirelessLink( int $id ) : void
    {
        $o = new WirelessLinks();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListWirelessLink() : void
    {
        $o = new WirelessLinks();
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
    #[Depends('testCreateWirelessLink')]
    public function testReplaceWirelessLinkBad( int $id ) : void
    {
        $o = new WirelessLinks();
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
    #[Depends('testCreateWirelessLink')]
    public function testReplaceWirelessLink( int $id ) : void
    {
        $o = new WirelessLinks();
        $result = $o->replace( data: [
            'interface_a' => self::$interfaceA->id,
            'interface_b' => self::$interfaceB->id,
            'ssid' => 'PHPUnit_Replace',
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
    #[Depends('testCreateWirelessLink')]
    public function testUpdateWirelessLink( int $id ) : void
    {
        $o = new WirelessLinks();
        $result = $o->update( data: [
            'ssid' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateWirelessLink')]
    public function testDeleteWirelessLink( int $id ) : void
    {
        $o = new WirelessLinks();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }


/* SETUP
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function setUpBeforeClass() : void
    {
        self::$siteA = TestDCIM::createSite();
        self::$siteB = TestDCIM::createSite();
        self::$manf = TestDCIM::createManufacturer();
        self::$deviceType = TestDCIM::createDeviceType( manf_id: self::$manf->id );
        self::$deviceRole = TestDCIM::createDeviceRole();
        self::$deviceA = TestDCIM::createDevice(
            site_id: self::$siteA->id,
            devtype_id: self::$deviceType->id,
            role_id: self::$deviceRole->id
        );
        self::$deviceB = TestDCIM::createDevice(
            site_id: self::$siteB->id,
            devtype_id: self::$deviceType->id,
            role_id: self::$deviceRole->id
        );
        self::$interfaceA = TestDCIM::createInterface(
            device_id: self::$deviceA->id
        );
        self::$interfaceB = TestDCIM::createInterface(
            device_id: self::$deviceB->id
        );
    }


/* TEAR DOWN
----------------------------------------------------------------------------- */

    public static function tearDownAfterClass(): void
    {
        TestDCIM::removeInterface( id: self::$interfaceA->id );
        TestDCIM::removeInterface( id: self::$interfaceB->id );
        TestDCIM::removeDevice( id: self::$deviceA->id );
        TestDCIM::removeDevice( id: self::$deviceB->id );
        TestDCIM::removeDeviceRole( id: self::$deviceRole->id );
        TestDCIM::removeDeviceType( id: self::$deviceType->id );
        TestDCIM::removeManufacturer( id: self::$manf->id );
        TestDCIM::removeSite( id: self::$siteA->id );
        TestDCIM::removeSite( id: self::$siteB->id );
    }
}