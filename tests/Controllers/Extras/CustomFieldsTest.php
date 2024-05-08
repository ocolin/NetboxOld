<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Extras\CustomFields;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class CustomFieldsTest extends TestExtras
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsCustomField() : void
    {
        $o = new CustomFields();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateCustomFieldBad() : void
    {
        $o = new CustomFields();
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
    public function testCreateCustomField() : int
    {
        $result = self::createCustomField();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCustomField')]
    public function testGetCustomField( int $id ) : void
    {
        $o = new CustomFields();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListCustomField() : void
    {
        $o = new CustomFields();
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
    #[Depends('testCreateCustomField')]
    public function testReplaceCustomFieldBad( int $id ) : void
    {
        $o = new CustomFields();
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
    #[Depends('testCreateCustomField')]
    public function testReplaceCustomField( int $id ) : void
    {
        $o = new CustomFields();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'content_types' => [ 'dcim.sitegroup' ],
            'type' => 'text'
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
    #[Depends('testCreateCustomField')]
    public function testUpdateCustomField( int $id ) : void
    {
        $o = new CustomFields();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateCustomField')]
    public function testDeleteCustomField( int $id ) : void
    {
        $o = new CustomFields();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}