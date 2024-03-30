<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

final class IpRangesAvailableIpsTest extends testCore
{
    public static object $range;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */
 
    public function testGetDetail() : void
    {
        $o = new IpRangesAvailableIps();
        $result = $o->getDetail( id: self::$range->id );
        
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
        self::$range = self::createIpRange();
    }

/*
---------------------------------------------------------------------------- */


    public static function tearDownAfterClass() : void
    {
        self::destroyIpRange( range: self::$range );
        sleep(1);
    }


/* TEST OPTIONS
---------------------------------------------------------------------------- */
 /*
    public function testOptions() : void
    {
        $o = new IpRangesAvailableIps();
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
 */


/* TEST POST DETAIL
---------------------------------------------------------------------------- */
  /*
    public function testPostDetail() : int
    {
        $o = new IpRangesAvailableIps();
        $d = new Data();
        //$d->protocol = 'vrrp2';
        //$d->group_id = 1;
        $result = $o->postDetail( data: $d );
        print_r( $result->body );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasProperty( 'id', $result->body );

        return $result->body->id;
    }
  */


}