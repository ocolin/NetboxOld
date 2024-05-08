<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Users\Users;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class UsersTest extends TestUsers
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsUser() : void
    {
        $o = new Users();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateUserBad() : void
    {
        $o = new Users();
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
    public function testCreateUser() : int
    {
        $result = self::createUser();
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateUser')]
    public function testGetUser( int $id ) : void
    {
        $o = new Users();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListUser() : void
    {
        $o = new Users();
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
    #[Depends('testCreateUser')]
    public function testReplaceUserBad( int $id ) : void
    {
        $o = new Users();
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
    #[Depends('testCreateUser')]
    public function testReplaceUser( int $id ) : void
    {
        $o = new Users();
        $result = $o->replace( data: [
            'username' => 'PHPUnit_ReplaceU',
            'password' => 'PHPUnit_ReplaceP',
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
    #[Depends('testCreateUser')]
    public function testUpdateUser( int $id ) : void
    {
        $o = new Users();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateUser')]
    public function testDeleteUser( int $id ) : void
    {
        $o = new Users();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}