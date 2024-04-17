<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Users\Groups;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class GroupsTest extends TestUsers
{

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsGroup() : void
    {
        $o = new Groups();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateGroupBad() : void
    {
        $o = new Groups();
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
    public function testCreateGroup() : int
    {
        $result = self::createGroup();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


    /* BAD REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateGroup')]
    public function testReplaceGroupBad( int $id ) : void
    {
        $o = new Groups();
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
    #[Depends('testCreateGroup')]
    public function testReplaceGroup( int $id ) : void
    {
        $o = new Groups();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
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
    #[Depends('testCreateGroup')]
    public function testUpdateGroup( int $id ) : void
    {
        $o = new Groups();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateGroup')]
    public function testDeleteGroup( int $id ) : void
    {
        $o = new Groups();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}