<?php 

declare( strict_types = 1 );

namespace Tests\Models\Wireless;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\Wireless\WirelessLinks;
use Cruzio\lib\Netbox\Data\Wireless\WirelessLinks AS Data;

require_once __DIR__ . '/../testCore.php';

final class WirelessLinksTest extends testCore
{
    public static object $interfaceA;
    public static object $interfaceB;
    public static object $deviceA;
    public static object $deviceB;
    public static object $siteA;
    public static object $siteB;
    public static object $devtype;
    public static object $manf;
    public static object $devrole;


/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new WirelessLinks();
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
        $o = new WirelessLinks();
        $d = new Data();
        $d->set( 'interface_a', self::$interfaceA->id );
        $d->set( 'interface_b', self::$interfaceB->id );
        $d->set( 'ssid', 'PHPUnit_WLinks-Post' );
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
        $o = new WirelessLinks();
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
        $o = new WirelessLinks();
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
        $o = new WirelessLinks();
        $d = new Data();
        $d->set( 'interface_a', self::$interfaceA->id );
        $d->set( 'interface_b', self::$interfaceB->id );
        $d->set( 'ssid', 'PHPUnit_WLinks-Put' );
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
        $o = new WirelessLinks();
        $d = new Data();
        $d->set( 'ssid', 'PHPUnit_WLinks-Patch' );
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
        $o = new WirelessLinks();
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
        self::$siteA     = self::createSite();
        self::$siteB     = self::createSite();
        self::$manf      = self::createManufacturer();
        self::$devtype   = self::createDeviceType( manf: self::$manf );
        self::$devrole   = self::createDeviceRole();

        self::$deviceA   = self::createDevice(
                       site: self::$siteA,
                 devicetype: self::$devtype,
                 devicerole: self::$devrole,
        );

        self::$deviceB   = self::createDevice(
                       site: self::$siteB,
                 devicetype: self::$devtype,
                 devicerole: self::$devrole,
        );
        self::$interfaceA = self::createInterface(
            device: self::$deviceA
        );
        self::$interfaceB = self::createInterface(
            device: self::$deviceB
        );
    }
    
/*
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public static function tearDownAfterClass() : void
    {
        self::destroyInterface( interface: self::$interfaceB );
        self::destroyInterface( interface: self::$interfaceA );
        self::destroyDevice( device: self::$deviceB );
        self::destroyDevice( device: self::$deviceA );
        self::destroyDeviceRole( devrole: self::$devrole );
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyManufacturer( manf: self::$manf );
        self::destroySite( site: self::$siteB );
        self::destroySite( site: self::$siteA );
        sleep(1);
    }
    

/* TEST POST LIST
---------------------------------------------------------------------------- */
/* 
    public function testPostList() :void
    {
        $o = new WirelessLinks();
        $result = $o->postList( options: [ $this->options ] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $link )
        {
            $this->deleteDetail( id: $link->id );
        }
    }
 */


/* TEST PUT LIST
---------------------------------------------------------------------------- */
/* 
    public function testPutList() : void
    {
        // SETUP
        $link = $this->postDetail()->body;
        $this->options->id = $link->id;

        $o = new WirelessLinks();
        $result = $o->putList( options: [ $this->options ] );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $link->id );
    }
 */


/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/* 
    public function testPatchList() : void
    {
        // SETUP
        $link = $this->postDetail()->body;
        $this->options->id = $link->id;

        $o = new WirelessLinks();
        $result = $o->patchList( options: [ $this->options ] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $link->id );
    }
 */


/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/* 
    public function testDeleteList() : void
    {
        // SETUP
        $link = $this->postDetail()->body;

        $o = new WirelessLinks();
        $result = $o->deleteList(
            options: [[ 'id' => $link->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }
 */

}