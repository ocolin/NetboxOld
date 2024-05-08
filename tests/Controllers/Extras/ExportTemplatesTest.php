<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Extras\ExportTemplates;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class ExportTemplatesTest extends TestExtras
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsExportTemplate() : void
    {
        $o = new ExportTemplates();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* BAD CREATE TEST
----------------------------------------------------------------------------- */

    public function testCreateExportTemplateBad() : void
    {
        $o = new ExportTemplates();
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
    public function testCreateExportTemplate() : int
    {
        $result = self::createExportTemplate();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }


/* GET TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateExportTemplate')]
    public function testGetExportTemplate( int $id ) : void
    {
        $o = new ExportTemplates();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListExportTemplate() : void
    {
        $o = new ExportTemplates();
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
    #[Depends('testCreateExportTemplate')]
    public function testReplaceExportTemplateBad( int $id ) : void
    {
        $o = new ExportTemplates();
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
    #[Depends('testCreateExportTemplate')]
    public function testReplaceExportTemplate( int $id ) : void
    {
        $o = new ExportTemplates();
        $result = $o->replace( data: [
            'name' => 'PHPUnit_Replace',
            'content_types' => [ 'dcim.sitegroup' ],
            'template_code' => 'test'
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
    #[Depends('testCreateExportTemplate')]
    public function testUpdateExportTemplate( int $id ) : void
    {
        $o = new ExportTemplates();
        $result = $o->update( data: [
            'name' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



/* DELETE TEST
----------------------------------------------------------------------------- */

    #[Depends('testCreateExportTemplate')]
    public function testDeleteExportTemplate( int $id ) : void
    {
        $o = new ExportTemplates();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}