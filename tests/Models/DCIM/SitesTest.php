<?php

declare( strict_types = 1 );

namespace Tests\Models\DCIM;

require_once __DIR__ . '/../testCore.php';

use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\DCIM\Sites;
use Cruzio\lib\Netbox\Params\DCIM\Sites as Props;
use Cruzio\lib\Netbox\Data\DCIM\Sites AS Data;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\Attributes\Depends;


final class SitesTest extends testCore
{

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new Sites();
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

    public function testPostDetail() : int
    {
        
        $o = new Sites();
        $d = new Data();
        $d->name = 'testSite';
        $d->slug = 'testsite';
        $d->status = 'active';

        $result = $o->postDetail(data: $d, params: [ 'exclude' => 'config_context'] );
        print_r( $result->body );

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


/* TEST PUT DETAIL
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testPutDetail( int $id ) : void
    {
        $o = new Sites();
        $d = new Data();
        $d->name = 'updateSite';
        $d->slug = 'updatesite';

        $result = $o->putDetail( 
                id: $id,
              data: $d,
            params: [ 'exclude' => 'config_context']
        );
        
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
     */

    #[Depends('testPostDetail')]
    public function testPatchDetail( int $id ) : void
    {
        $o = new Sites();
        $d = new Data();
        $d->name = 'updateSite2';
        $d->slug = 'updatesite2';

        $result = $o->patchDetail(
              id: $id,
            data: $d,
          params: [ 'exclude' => 'config_context']
        );

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

    #[Depends('testPostDetail')]
    public function testGetDetail( int $id ) : void
    {
        $o = new Sites();
        $result = $o->getDetail( id: $id );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }


/* TEST GET LIST
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testGetList() : void
    {
        $o = new Sites();
        $p = new Props();
        $p->exclude = 'config_context';
        $result = $o->getList( params: $p );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
        $this->assertIsArray( $result->body->results );
    }




/* DELETE A SITE
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */

    #[Depends('testPostDetail')]
    public function testDeleteDetail( int $id ) : void
    {
        $o = new Sites();

        $result = $o->deleteDetail( id: $id  );
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 204, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertNull( $result->body );
    }








/* TEST POST LIST
---------------------------------------------------------------------------- */
/*
    public function testPostList() :void
    {
        $o = new Sites();

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
        foreach( $result->body AS $site )
        {
            $this->deleteDetail( id: $site->id );
        }
    }
*/



/* TEST PUT LIST
---------------------------------------------------------------------------- */
/*
    public function testPutList() : void
    {
        // SETUP
        $site = $this->postDetail()->body;
        $this->options->id = $site->id;

        $o = new Sites();
        $result = $o->putList(
            options: [ $this->options ]
        );
        
        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $site->id );
    }
*/



/* TEST PATCH LIST
---------------------------------------------------------------------------- */
/*
    public function testPatchList() : void
    {
        // SETUP
        $site = $this->postDetail()->body;
        $this->options->id = $site->id;

        $o = new Sites();
        $result = $o->patchList(
            options: [ $this->options ]
        );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsArray( $result->body );

        // CLEAN UP
        $this->deleteDetail( $site->id );
    }
*/



/* TEST DELETE LIST
---------------------------------------------------------------------------- */
/*
    public function testDeleteList() : void
    {
        // SETUP
        $site = $this->postDetail()->body;

        $o = new Sites();
        $result = $o->deleteList(
            options: [[ 'id' => $site->id ]]
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