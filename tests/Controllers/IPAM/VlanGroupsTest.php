<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\VlanGroups;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class VlanGroupsTest extends TestIPAM
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsVlanGroup() : void
    {
        $o = new VlanGroups();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateVlanGroupBad() : void
    {
        $o = new VlanGroups();
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
    public function testCreateVlanGroup() : int
    {
        $result = self::createVlanGroup();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateVlanGroup')]
    public function testGetVlanGroup( int $id ) : void
    {
        $o = new VlanGroups();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListVlanGroup() : void
    {
        $o = new VlanGroups();
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
    #[Depends('testCreateVlanGroup')]
    public function testReplaceVlanGroupBad( int $id ) : void
    {
        $o = new VlanGroups();
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
    #[Depends('testCreateVlanGroup')]
    public function testReplaceVlanGroup( int $id ) : void
    {
        $o = new VlanGroups();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace',
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
    #[Depends('testCreateVlanGroup')]
    public function testUpdateVlanGroup( int $id ) : void
    {
        $o = new VlanGroups();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateVlanGroup')]
    public function testDeleteVlanGroup( int $id ) : void
    {
        $o = new VlanGroups();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}