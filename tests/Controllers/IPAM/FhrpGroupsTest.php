<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\FhrpGroups;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class FhrpGroupsTest extends TestIPAM
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsFhrpGroup() : void
    {
        $o = new FhrpGroups();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateFhrpGroupBad() : void
    {
        $o = new FhrpGroups();
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
    public function testCreateFhrpGroup() : int
    {
        $result = self::createFhrpGroup();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateFhrpGroup')]
    public function testGetFhrpGroup( int $id ) : void
    {
        $o = new FhrpGroups();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListFhrpGroup() : void
    {
        $o = new FhrpGroups();
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
    #[Depends('testCreateFhrpGroup')]
    public function testReplaceFhrpGroupBad( int $id ) : void
    {
        $o = new FhrpGroups();
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
    #[Depends('testCreateFhrpGroup')]
    public function testReplaceFhrpGroup( int $id ) : void
    {
        $o = new FhrpGroups();
        $result = $o->replace( data: [
            'protocol' => 'vrrp2',
            'group_id' => $id,
            'description' => 'PHPUnit_Replace',
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
    #[Depends('testCreateFhrpGroup')]
    public function testUpdateFhrpGroup( int $id ) : void
    {
        $o = new FhrpGroups();
        $result = $o->update( data: [
            'description' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateFhrpGroup')]
    public function testDeleteFhrpGroup( int $id ) : void
    {
        $o = new FhrpGroups();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}