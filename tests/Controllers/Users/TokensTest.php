<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Users\Tokens;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class TokensTest extends TestUsers
{
    public static object $user;

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsToken() : void
    {
        $o = new Tokens();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateTokenBad() : void
    {
        $o = new Tokens();
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
    public function testCreateToken() : int
    {
        $result = self::createToken( user_id: self::$user->id );
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateToken')]
    public function testGetToken( int $id ) : void
    {
        $o = new Tokens();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListToken() : void
    {
        $o = new Tokens();
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
    #[Depends('testCreateToken')]
    public function testReplaceTokenBad( int $id ) : void
    {
        $o = new Tokens();
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
    #[Depends('testCreateToken')]
    public function testReplaceToken( int $id ) : void
    {
        $o = new Tokens();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'user' => self::$user->id
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
    #[Depends('testCreateToken')]
    public function testUpdateToken( int $id ) : void
    {
        $o = new Tokens();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateToken')]
    public function testDeleteToken( int $id ) : void
    {
        $o = new Tokens();
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
        self::$user = self::createUser();
    }


/* TEAR DOWN
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeUser( id: self::$user->id );
    }
}