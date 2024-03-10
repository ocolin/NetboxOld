<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

final class VlanGroupsAvailableVlansTest extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new VlanGroupsAvailableVlans();
        $result = $o->options();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        $o = new VlanGroupsAvailableVlans();
        $result = $o->getDetail( id: $_ENV['group']->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );
    } 



/* TEST POST DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPostDetail() : void
    {
        $o = new VlanGroupsAvailableVlans();
        $result = $this->postDetail();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasAttribute( 'id', $result->body );

        //CLEAN UP
        $test = $this->deleteDetail( $result->body->id );
    }
 */


/* CREATE AN IP
---------------------------------------------------------------------------- */
/* 
    public function postDetail() : array
    {
        $o = new VlanGroupsAvailableVlans();

        return $o->postDetail();
    }
 */

    
/*
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        $_ENV['group'] = self::createVlanGroup();
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyVlanGroup( group: $_ENV['group'] );
        unset( $_ENV['group'] );
        sleep(1);
    }
}