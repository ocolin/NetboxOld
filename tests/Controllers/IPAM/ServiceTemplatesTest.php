<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\ServiceTemplates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ServiceTemplatesTest extends TestIPAM
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsServiceTemplate() : void
    {
        $o = new ServiceTemplates();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateServiceTemplateBad() : void
    {
        $o = new ServiceTemplates();
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
    public function testCreateServiceTemplate() : int
    {
        $result = self::createServiceTemplate();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateServiceTemplate')]
    public function testGetServiceTemplate( int $id ) : void
    {
        $o = new ServiceTemplates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListServiceTemplate() : void
    {
        $o = new ServiceTemplates();
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
    #[Depends('testCreateServiceTemplate')]
    public function testReplaceServiceTemplateBad( int $id ) : void
    {
        $o = new ServiceTemplates();
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
    #[Depends('testCreateServiceTemplate')]
    public function testReplaceServiceTemplate( int $id ) : void
    {
        $o = new ServiceTemplates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'protocol' => 'tcp',
            'ports' => [1]
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
    #[Depends('testCreateServiceTemplate')]
    public function testUpdateServiceTemplate( int $id ) : void
    {
        $o = new ServiceTemplates();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateServiceTemplate')]
    public function testDeleteServiceTemplate( int $id ) : void
    {
        $o = new ServiceTemplates();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}