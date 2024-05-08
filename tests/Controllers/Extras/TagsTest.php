<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Extras\Tags;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class TagsTest extends TestExtras
{

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsTag() : void
    {
        $o = new Tags();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateTagBad() : void
    {
        $o = new Tags();
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
    public function testCreateTag() : int
    {
        $result = self::createTag();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateTag')]
    public function testGetTag( int $id ) : void
    {
        $o = new Tags();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListTag() : void
    {
        $o = new Tags();
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
    #[Depends('testCreateTag')]
    public function testReplaceTagBad( int $id ) : void
    {
        $o = new Tags();
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
    #[Depends('testCreateTag')]
    public function testReplaceTag( int $id ) : void
    {
        $o = new Tags();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'slug' => 'PHPUnit_Replace',
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
    #[Depends('testCreateTag')]
    public function testUpdateTag( int $id ) : void
    {
        $o = new Tags();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateTag')]
    public function testDeleteTag( int $id ) : void
    {
        $o = new Tags();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}