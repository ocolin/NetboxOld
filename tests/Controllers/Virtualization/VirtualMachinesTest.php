<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Virtualization;

require_once __DIR__ . '/../DCIM/TestDCIM.php';

use Cruzio\lib\Netbox\Controllers\Virtualization\VirtualMachines;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\DCIM\TestDCIM;

final class VirtualMachinesTest extends TestVirtualization
{
    public static object $site;
    public static object $type;
    public static object $group;
    public static object $cluster;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsVirtualMachine() : void
    {
        $o = new VirtualMachines();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateVirtualMachineBad() : void
    {
        $o = new VirtualMachines();
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
    public function testCreateVirtualMachine() : int
    {
        $result = self::createVirtualMachine( cluster_id: self::$cluster->id );
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateVirtualMachine')]
    public function testGetVirtualMachine( int $id ) : void
    {
        $o = new VirtualMachines();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListVirtualMachine() : void
    {
        $o = new VirtualMachines();
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
    #[Depends('testCreateVirtualMachine')]
    public function testReplaceVirtualMachineBad( int $id ) : void
    {
        $o = new VirtualMachines();
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
    #[Depends('testCreateVirtualMachine')]
    public function testReplaceVirtualMachine( int $id ) : void
    {
        $o = new VirtualMachines();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'cluster' =>  self::$cluster->id
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
    #[Depends('testCreateVirtualMachine')]
    public function testUpdateVirtualMachine( int $id ) : void
    {
        $o = new VirtualMachines();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateVirtualMachine')]
    public function testDeleteVirtualMachine( int $id ) : void
    {
        $o = new VirtualMachines();
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
        self::$site  = TestDCIM::createSite();
        self::$type  = self::createClusterType();
        self::$group = self::createClusterGroup();
        self::$cluster = self::createCluster(
            site_id:  self::$site->id,
            type_id:  self::$type->id,
            group_id: self::$group->id
        );

    }

/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        TestDCIM::removeSite( id: self::$site->id );
        self::removeClusterType( id: self::$type->id );
        self::removeClusterGroup( id: self::$group->id );
        self::removeCluster( id: self::$cluster->id );
    }
}