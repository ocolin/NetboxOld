<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class IpRangesAvailableIpsTest extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new IpRangesAvailableIps();
        $result = $o->options();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
    }



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    public function testGetDetail() : void
    {
        // SETUP
        $o = new IpRangesAvailableIps();
        $result = $o->getDetail( id: $_ENV['range']->id );
        
        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsArray( $result['body'] );
    } 



/* TEST POST DETAIL
---------------------------------------------------------------------------- */
/* 
    public function testPostDetail() : void
    {
        $o = new IpRangesAvailableIps();
        $result = $this->postDetail();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );
        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 201, $result['status'] );
        $this->assertIsArray( $result['headers'] );
        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'id', $result['body'] );

        //CLEAN UP
        $test = $this->deleteDetail( $result['body']->id );
    }
 */


/* CREATE AN IP
---------------------------------------------------------------------------- */
/* 
    public function postDetail() : array
    {
        $o = new IpRangesAvailableIps();

        return $o->postDetail( 
            protocol: 'vrrp2',
            group_id: 1
        );
    }
 */


/* DELETE AN IP
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id )
    {
        $o = new IpRangesAvailableIps();

        return $o->deleteDetail( id: $id  );
    }



    public static function setUpBeforeClass() : void
    {
        $_ENV['range'] = self::createIpRange();
    }

    public static function tearDownAfterClass() : void
    {
        self::destroyIpRange( range: $_ENV['range'] );
        unset( $_ENV['range'] );
    }

}