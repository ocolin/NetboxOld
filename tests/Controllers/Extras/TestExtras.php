<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestExtras extends TestCase
{

/* EXTRAS - CONFIG CONTEXT
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createConfigContext() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Extras\ConfigContexts();
        $d = new Data\Extras\ConfigContexts();
        $d->set( 'name', 'PHPUnit_ConfigContexts-' . $rand );
        $d->set( 'data', [ 'foo' => '123' ] );

        return $o->create( data: $d );
    }

    public static function removeWirelessLan( int $id ) : void
    {
        $o = new Controllers\Extras\ConfigContexts();
        $o->delete( id: $id );
    }



/* EXTRAS - CUSTOM FIELD
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createCustomField() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Extras\CustomFields();
        $d = new Data\Extras\CustomFields();
        $d->set( 'name', 'PHPOUnit_CustomFields_' . $rand );
        $d->set( 'content_types', [ 'dcim.sitegroup' ] );
        $d->set( 'type', 'text' );

        return $o->create( data: $d );
    }

    public static function removeCustomField( int $id ) : void
    {
        $o = new Controllers\Extras\CustomFields();
        $o->delete( id: $id );
    }



/* EXTRAS - CUSTOM LINK
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createCustomLink() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Extras\CustomLinks();
        $d = new Data\Extras\CustomLinks();
        $d->set( 'name', 'PHPOUnit_CustomLink_' . $rand );
        $d->set( 'content_types', [ 'dcim.sitegroup' ] );
        $d->set( 'link_url', 'https://test.com' );
        $d->set( 'link_text', 'testing' );

        return $o->create( data: $d );
    }

    public static function removeCustomLink( int $id ) : void
    {
        $o = new Controllers\Extras\CustomLinks();
        $o->delete( id: $id );
    }



/* EXTRAS -
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createExportTemplate() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Extras\ExportTemplates();
        $d = new Data\Extras\ExportTemplates();
        $d->set( 'name', 'PHPOUnit_ExportTemplate-' . $rand );
        $d->set( 'content_types', [ 'dcim.sitegroup' ] );
        $d->set( 'template_code', 'test' );

        return $o->create( data: $d );
    }

    public static function removeExportTemplate( int $id ) : void
    {
        $o = new Controllers\Extras\ExportTemplates();
        $o->delete( id: $id );
    }



    /* EXTRAS -
    ---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createTag() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Extras\Tags();
        $d = new Data\Extras\Tags();
        $d->set( 'name', 'PHPOUnit_Tag-' . $rand );
        $d->set( 'slug', 'PHPOUnit_Tag-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeTag( int $id ) : void
    {
        $o = new Controllers\Extras\Tags();
        $o->delete( id: $id );
    }

}