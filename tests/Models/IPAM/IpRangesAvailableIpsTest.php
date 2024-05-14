<?php

declare( strict_types = 1 );

namespace Tests\Models\IPAM;

use Cruzio\lib\Netbox\Data\IPAM\IpRangesAvailableIps as Data;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\IPAM\IpRangesAvailableIps;
use Cruzio\lib\Netbox\Models\IPAM\IpAddresses;

require_once __DIR__ . '/../testCore.php';

final class IpRangesAvailableIpsTest extends testCore
{
    public static object $range;


/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
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



/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetDetail() : void
    {
        $o = new IpRangesAvailableIps();
        $result = $o->get( id: self::$range->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );
    }



/* TEST POST
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     * @throws GuzzleException
     */
    public function testPostDetail() : int
    {

        $o = new IpRangesAvailableIps();
        $d = new Data();
        $d->set( 'status', 'active' );
        $d->set( 'description', 'unit testing' );
        $d->set( 'range', self::$range->id);
        $result = $o->post( data: $d );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        return $result->body->id;
    }



/* TEST DELETE IP ADDRESS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    #[Depends('testPostDetail')]
    public function testDeleteDetail( int $id ) : void
    {
        $o = new IpAddresses();
        $result = $o->delete( id: $id );

        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertNull( $result->body );
    }



/* SET UP CLASS
---------------------------------------------------------------------------- */


    /**
     * @throws GuzzleException
     */
    public static function setUpBeforeClass() : void
    {
        self::$range = self::createIpRange();
    }



/* TEAR DOWN CLASS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public static function tearDownAfterClass() : void
    {
        self::destroyIpRange( range: self::$range );
        sleep(1);
    }

}