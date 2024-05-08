<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Extras\CustomLinks;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class CustomLinksTest extends TestExtras
{

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsCustomLink() : void
    {
        $o = new CustomLinks();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateCustomLinkBad() : void
    {
        $o = new CustomLinks();
        $result = $o->create( data: [] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


    /* CREATE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public function testCreateCustomLink() : int
    {
        $result = self::createCustomLink();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateCustomLink')]
    public function testGetCustomLink( int $id ) : void
    {
        $o = new CustomLinks();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListCustomLink() : void
    {
        $o = new CustomLinks();
        $result = $o->get();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'count', $result );
        $this->assertObjectHasProperty( 'next', $result );
        $this->assertObjectHasProperty( 'previous', $result );
        $this->assertObjectHasProperty( 'results', $result );
        $this->assertIsArray( $result->results );
        $this->assertIsObject( $result->results[0] );
        $this->assertObjectHasProperty( 'id', $result->results[0] );
    }


    /* BAD REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateCustomLink')]
    public function testReplaceCustomLinkBad( int $id ) : void
    {
        $o = new CustomLinks();
        $result = $o->replace( data: [], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


    /* REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateCustomLink')]
    public function testReplaceCustomLink( int $id ) : void
    {
        $o = new CustomLinks();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'content_types' => [ 'dcim.sitegroup' ],
            'link_url' => 'https://test.com',
            'link_text' => 'testing'
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* UPDATE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateCustomLink')]
    public function testUpdateCustomLink( int $id ) : void
    {
        $o = new CustomLinks();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateCustomLink')]
    public function testDeleteCustomLink( int $id ) : void
    {
        $o = new CustomLinks();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}