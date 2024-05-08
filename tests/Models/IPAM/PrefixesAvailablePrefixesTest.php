<?php

declare( strict_types = 1 );

namespace Tests\Models\IPAM;

use GuzzleHttp\Exception\GuzzleException;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\IPAM\PrefixesAvailablePrefixes;

require_once __DIR__ . '/../testCore.php';

final class PrefixesAvailablePrefixesTest extends testCore
{
    public static object $prefix;


/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetDetail() : void
    {
        $o = new PrefixesAvailablePrefixes();
        $result = $o->get( id: self::$prefix->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );
    } 


/* SETUP
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public static function setUpBeforeClass() : void
    {
        self::$prefix = self::createPrefix();
    }

    
/* TEAR DOWN
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public static function tearDownAfterClass() : void
    {
        self::destroyPrefix( prefix: self::$prefix );
        sleep(1);
    }
}