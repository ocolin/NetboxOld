<?php

declare( strict_types = 1 );

namespace Tests\Models\DCIM;

use Exception;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\DCIM\Devices;
use Cruzio\lib\Netbox\Data\DCIM\Devices AS Data;
use Cruzio\lib\Netbox\Params\DCIM\Sites AS Params;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;

require_once __DIR__ . '/../testCore.php';

final class DevicesTest extends testCore
{
    public static object $devrole;
    public static object $devtype;
    public static object $manf;
    public static object $site;




/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new Devices();
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



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function testPostDetail() : int
    {
        $o = new Devices();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_Device' );
        $d->set( 'device_type', self::$devtype->id );
        $d->set( 'site', self::$site->id );
        $d->set( 'role', self::$devrole->id );
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
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetList() : void
    {
        $o = new Devices();
        $result = $o->get();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertObjectHasProperty( 'results', $result->body );
        #@phpstan-ignore-next-line
        $this->assertIsArray( $result->body->results );
    }
 


/* TEST GET DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testGetDetail( int $id ) : void
    {
        $o = new Devices();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }
 


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */

    #[Depends('testPostDetail')]
    public function testPutDetail( int $id ) : void
    {
        $o = new Devices();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_DevicePut' );
        $d->set( 'device_type', self::$devtype->id );
        $d->set( 'site', self::$site->id );
        $d->set( 'role', self::$devrole->id );
        $result = $o->put( data: $d, id: $id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }
 


/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     * @throws Exception
     */

    #[Depends('testPostDetail')]
    public function testPatchDetail( int $id ) : void
    {
        $o = new Devices();
        $d = new Data();
        $d->set( 'name', 'PHPUnit_DevicePatch' );
        $result = $o->patch( data: $d, id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }
 



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testDeleteDetail( int $id ) : void
    {
        $o = new Devices();
        $result = $o->delete( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 

/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public static function setUpBeforeClass() : void
    {
        self::$site     = self::createSite();
        self::$manf     = self::createManufacturer();
        self::$devtype  = self::createDeviceType( manf: self::$manf );
        self::$devrole  = self::createDeviceRole();
    }
    
    
/*
---------------------------------------------------------------------------- */


    /**
     * @throws GuzzleException
     */
    public static function tearDownAfterClass() : void
    {
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$site );
        sleep(1);
    }
}