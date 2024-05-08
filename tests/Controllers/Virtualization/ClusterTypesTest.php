<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Virtualization;

use Cruzio\lib\Netbox\Controllers\Virtualization\ClusterTypes;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ClusterTypesTest extends TestVirtualization
{
    public static object $user;

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsClusterType() : void
    {
        $o = new ClusterTypes();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateClusterTypeBad() : void
    {
        $o = new ClusterTypes();
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
    public function testCreateClusterType() : int
    {
        $result = self::createClusterType();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateClusterType')]
    public function testGetClusterType( int $id ) : void
    {
        $o = new ClusterTypes();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListClusterType() : void
    {
        $o = new ClusterTypes();
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
    #[Depends('testCreateClusterType')]
    public function testReplaceClusterTypeBad( int $id ) : void
    {
        $o = new ClusterTypes();
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
    #[Depends('testCreateClusterType')]
    public function testReplaceClusterType( int $id ) : void
    {
        $o = new ClusterTypes();
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
    #[Depends('testCreateClusterType')]
    public function testUpdateClusterType( int $id ) : void
    {
        $o = new ClusterTypes();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateClusterType')]
    public function testDeleteClusterType( int $id ) : void
    {
        $o = new ClusterTypes();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }

}