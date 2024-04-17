<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Virtualization;

use Cruzio\lib\Netbox\Controllers\Virtualization\ClusterGroups;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ClusterGroupsTest extends TestVirtualization
{
    public static object $user;

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsClusterGroup() : void
    {
        $o = new ClusterGroups();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateClusterGroupBad() : void
    {
        $o = new ClusterGroups();
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
    public function testCreateClusterGroup() : int
    {
        $result = self::createClusterGroup();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateClusterGroup')]
    public function testGetClusterGroup( int $id ) : void
    {
        $o = new ClusterGroups();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListClusterGroup() : void
    {
        $o = new ClusterGroups();
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
    #[Depends('testCreateClusterGroup')]
    public function testReplaceClusterGroupBad( int $id ) : void
    {
        $o = new ClusterGroups();
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
    #[Depends('testCreateClusterGroup')]
    public function testReplaceClusterGroup( int $id ) : void
    {
        $o = new ClusterGroups();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace'
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
    #[Depends('testCreateClusterGroup')]
    public function testUpdateClusterGroup( int $id ) : void
    {
        $o = new ClusterGroups();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateClusterGroup')]
    public function testDeleteClusterGroup( int $id ) : void
    {
        $o = new ClusterGroups();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }

}