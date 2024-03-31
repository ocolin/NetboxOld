<?php

declare( strict_types = 1 );

namespace Tests\Models\IPAM;

use GuzzleHttp\Exception\GuzzleException;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\IPAM\PrefixesAvailableIps;

require_once __DIR__ . '/../testCore.php';

final class PrefixesAvailableIpsTest extends testCore
{
    public static object $prefix;


/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetDetail() : void
    {
        $o = new PrefixesAvailableIps();
        $result = $o->getDetail( id: self::$prefix->id );
        
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
        $o = new PrefixesAvailableIps();
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


    
/*
---------------------------------------------------------------------------- */

 
    public static function setUpBeforeClass() : void
    {
        self::$prefix = self::createPrefix();
    }

    
/*
---------------------------------------------------------------------------- */

 
    public static function tearDownAfterClass() : void
    {
        self::destroyPrefix( prefix: self::$prefix );
        sleep(1);
    }

}