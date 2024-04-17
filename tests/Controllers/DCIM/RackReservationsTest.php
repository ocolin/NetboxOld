<?php

declare( strict_types = 1 );

namespace Tests\Controllers\DCIM;

require_once __DIR__ . '/../Users/TestUsers.php';

use Cruzio\lib\Netbox\Controllers\DCIM\RackReservations;
use Exception;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Controllers\Users\TestUsers;

final class RackReservationsTest extends TestDCIM
{
    public static object $site;
    public static object $rack;
    public static object $user;

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsRackReservation() : void
    {
        $o = new RackReservations();
        $result = $o->options();
        ;
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateRackReservationBad() : void
    {
        $o = new RackReservations();
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
    public function testCreateRackReservation() : int
    {
        $result = self::createRackReservation(
            rack_id: self::$rack->id,
            user_id: self::$user->id
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateRackReservation')]
    public function testGetRackReservation( int $id ) : void
    {
        $o = new RackReservations();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListRackReservation() : void
    {
        $o = new RackReservations();
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
    #[Depends('testCreateRackReservation')]
    public function testReplaceRackReservationBad( int $id ) : void
    {
        $o = new RackReservations();

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
    #[Depends('testCreateRackReservation')]
    public function testReplaceRackReservation( int $id ) : void
    {
        $o = new RackReservations();
        $result = $o->replace( data: [
            'description' => 'PHPUnit_Replace',
            'rack' => self::$rack->id,
            'user' => self::$user->id,
            'units' => [1]
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
    #[Depends('testCreateRackReservation')]
    public function testUpdateRackReservation( int $id ) : void
    {
        $o = new RackReservations();
        $result = $o->update( data: [
            'description' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateRackReservation')]
    public function testDeleteRackReservation( int $id ) : void
    {
        $o = new RackReservations();
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
        self::$site = self::createSite();
        self::$rack = self::createRack( site_id: self::$site->id );
        self::$user = TestUsers::createUser();
    }


    /* TEAR DOWN
    ---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::removeSite(id: self::$site->id);
        self::removeRack(id: self::$rack->id);
        TestUsers::removeUser(id: self::$user->id);
    }
}