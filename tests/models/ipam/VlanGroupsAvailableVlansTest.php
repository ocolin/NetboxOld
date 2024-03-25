<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

final class VlanGroupsAvailableVlansTest extends testCore
{
    public static object $vlangroup;

    public function __construct()
    {
        parent::__construct();
    }


/* TEST GET DETAIL
---------------------------------------------------------------------------- */
 
    public function testGetDetail() : void
    {
        $o = new VlanGroupsAvailableVlans();
        $result = $o->getDetail( id: self::$vlangroup->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );
    } 



/*
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$vlangroup = self::createVlanGroup();
    }
    
/*
---------------------------------------------------------------------------- */

    public static function tearDownAfterClass() : void
    {
        self::destroyVlanGroup( self::$vlangroup );
        sleep(1);
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

}