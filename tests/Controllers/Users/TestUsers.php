<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Users;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestUsers extends TestCase
{

/* USERS -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createUser() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Users\Users();
        $d = new Data\Users\Users();
        $d->set( 'username', 'PHPUnit_User_User-' . $rand );
        $d->set( 'password', 'PHPUnit_User_Pass-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeUser( int $id ) : void
    {
        $o = new Controllers\Users\Users();
        $o->delete( id: $id );
    }



/* USERS -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createGroup() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Users\Groups();
        $d = new Data\Users\Groups();
        $d->set( 'name', 'PHPUnit_Group-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeGroup( int $id ) : void
    {
        $o = new Controllers\Users\Groups();
        $o->delete( id: $id );
    }


/* USERS -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createToken( int $user_id ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Users\Tokens();
        $d = new Data\Users\Tokens();
        $d->set( 'name', 'PHPUnit_Token-' . $rand );
        $d->set( 'user', $user_id );

        return $o->create( data: $d );
    }

    public static function removeToken( int $id ) : void
    {
        $o = new Controllers\Users\Tokens();
        $o->delete( id: $id );
    }

}