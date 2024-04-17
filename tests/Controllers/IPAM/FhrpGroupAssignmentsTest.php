<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

require_once __DIR__ . '/../DCIM/TestDCIM.php';

use Cruzio\lib\Netbox\Controllers\IPAM\FhrpGroupAssignments;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\DCIM\TestDCIM;

final class FhrpGroupAssignmentsTest extends TestIPAM
{
    public static object $group;
    public static object $interface;
    public static object $device;
    public static object $site;
    public static object $role;
    public static object $type;
    public static object $manufacturer;

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsFhrpGroupAssignment() : void
    {
        $o = new FhrpGroupAssignments();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateFhrpGroupAssignmentBad() : void
    {
        $o = new FhrpGroupAssignments();
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
    public function testCreateFhrpGroupAssignment() : int
    {
        $result = self::createFhrpGroupAssignment(
            group_id: self::$group->id,
            interface_id: self::$interface->id
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateFhrpGroupAssignment')]
    public function testGetFhrpGroupAssignment( int $id ) : void
    {
        $o = new FhrpGroupAssignments();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListFhrpGroupAssignment() : void
    {
        $o = new FhrpGroupAssignments();
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
    #[Depends('testCreateFhrpGroupAssignment')]
    public function testReplaceFhrpGroupAssignmentBad( int $id ) : void
    {
        $o = new FhrpGroupAssignments();
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
    #[Depends('testCreateFhrpGroupAssignment')]
    public function testReplaceFhrpGroupAssignment( int $id ) : void
    {
        $o = new FhrpGroupAssignments();
        $result = $o->replace( data: [
            'description' => 'PHPUnit_Replace',
            'group' => self::$group->id,
            'interface_id' => self::$interface->id,
            'interface_type' => 'dcim.device',
            'priority' => 2
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
    #[Depends('testCreateFhrpGroupAssignment')]
    public function testUpdateFhrpGroupAssignment( int $id ) : void
    {
        $o = new FhrpGroupAssignments();
        $result = $o->update( data: [
            'description' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateFhrpGroupAssignment')]
    public function testDeleteFhrpGroupAssignment( int $id ) : void
    {
        $o = new FhrpGroupAssignments();
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
        self::$interface = TestDCIM::createInterface( device_id: self::$device->id );
    }


    /* TEAR DOWN
    ---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        TestDCIM::removeInterface( id: self::$interface->id );
        TestDCIM::removeDevice( id: self::$device->id );
        TestDCIM::removeDeviceRole( id: self::$role->id );
        TestDCIM::removeDeviceType( id: self::$type->id );
        TestDCIM::removeManufacturer( id: self::$manufacturer->id );
        TestDCIM::removeSite( id: self::$site->id );
        self::removeFhrpGroup( id: self::$group->id );
    }
}