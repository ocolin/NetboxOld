<?php 

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\testCore;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Options\DCIM\ConsoleServerPortTemplates AS Options;

require_once __DIR__ . '/../testCore.php';

final class ConsoleServerPortTemplatesTest extends testCore
{
    public Options $options;
    public static $devtype;
    public static $manf;

    public function __construct()
    {
        parent::__construct();
    }



/* TEST OPTIONS
---------------------------------------------------------------------------- */

    public function testOptions() : void
    {
        $o = new ConsoleServerPortTemplates();
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
        // SETUP
        $template = $this->postDetail()->body;

        $o = new ConsoleServerPortTemplates();
        $result = $o->getDetail( id: $template->id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $template->id );
    }
 


/* TEST GET LIST
---------------------------------------------------------------------------- */

    public function testGetList() : void
    {
        // SETUP
        $template = $this->postDetail()->body;

        $o = new ConsoleServerPortTemplates();
        $result = $o->getList();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertIsArray( $result->body->results );

        // CLEAN UP
        $this->deleteDetail( $template->id );
    }



/* TEST POST DETAIL
---------------------------------------------------------------------------- */

    public function testPostDetail() : void
    {
        $o = new ConsoleServerPortTemplates();
        $result = $this->postDetail();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        //CLEAN UP
        $this->deleteDetail( $result->body->id );
    }



/* TEST POST LIST
---------------------------------------------------------------------------- */

    public function testPostList() :void
    {
        $o = new ConsoleServerPortTemplates();

        $result = $o->postList(
            options: [ $this->options ] 
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 201, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        //CLEAN UP
        foreach( $result->body AS $template )
        {
            $this->deleteDetail( id: $template->id );
        }
    }



/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    public function testPutDetail() : void
    {
        // SETUP
        $template = $this->postDetail()->body;

        $o = new ConsoleServerPortTemplates();
        $result = $o->putDetail( 
                     id: $template->id, 
                   name: 'PHPUnit_ConsoleServerPortTemp',
            device_type: self::$devtype->id                 
        );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $template->id );
    }



/* TEST PUT LIST
---------------------------------------------------------------------------- */

    public function testPutList() : void
    {
        // SETUP
        $template = $this->postDetail()->body;
        $this->options->id = $template->id;

        $o = new ConsoleServerPortTemplates();
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
        $this->deleteDetail( $template->id );
    }



/* TEST PATCH DETAIL
---------------------------------------------------------------------------- */

    public function testPatchDetail() : void
    {
        // SETUP
        $template = $this->postDetail()->body;

        $o = new ConsoleServerPortTemplates();
        $result = $o->patchDetail(
                     id: $template->id, 
                   name: 'PHPUnit_ConsoleServerPortTemp',
            device_type: self::$devtype->id 
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );

        // CLEAN UP
        $this->deleteDetail( $template->id );
    }



/* TEST PATCH LIST
---------------------------------------------------------------------------- */

    public function testPatchList() : void
    {
        // SETUP
        $template = $this->postDetail()->body;
        $this->options->id = $template->id;

        $o = new ConsoleServerPortTemplates();
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
        $this->deleteDetail( $template->id );
    }



/* TEST DELETE DETAIL
---------------------------------------------------------------------------- */

    public function testDeleteDetail() : void
    {
        // SETUP
        $template = $this->postDetail()->body;
        
        $o = new ConsoleServerPortTemplates();
        $result = $o->deleteDetail( id: $template->id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* TEST DELETE LIST
---------------------------------------------------------------------------- */

    public function testDeleteList() : void
    {
        // SETUP
        $template = $this->postDetail()->body;

        $o = new ConsoleServerPortTemplates();
        $result = $o->deleteList(
            options: [[ 'id' => $template->id ]]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
    }



/* CREATE A RACK ROLES
---------------------------------------------------------------------------- */

    public function postDetail() : Response
    {
        $o = new ConsoleServerPortTemplates();

        return $o->postDetail( 
                   name: 'PHPUnit_ConsoleServerPortTemp',
            device_type: self::$devtype->id
        );
    }



/* DELETE A RACK ROLES
---------------------------------------------------------------------------- */

    public function deleteDetail( int $id ) : Response
    {
        $o = new ConsoleServerPortTemplates();

        return $o->deleteDetail( id: $id  );
    }



/* SETUP AND CLOSING FUNCTIONS
---------------------------------------------------------------------------- */

    public static function setUpBeforeClass() : void
    {
        self::$manf     = self::createManufacturer();
        self::$devtype  = self::createDeviceType( manf: self::$manf );
    }
    
/*
---------------------------------------------------------------------------- */

 
    public static function tearDownAfterClass() : void
    {
        self::destroyDeviceType( devtype: self::$devtype );
        self::destroyManufacturer( manf: self::$manf );
        sleep(1);
    }
    
/*
---------------------------------------------------------------------------- */

         
    public function setUp() : void
    {
        $rand = rand( 1, 100000 );
        $this->options = new Options();
        $this->options->name        = 'PHPUnit_ConsServPortTempl-' . $rand;
        $this->options->device_type = self::$devtype->id;
    }
}