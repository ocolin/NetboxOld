<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Tenancy;

use Cruzio\lib\Netbox\Controllers as Controllers;
use Cruzio\lib\Netbox\Data as Data;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestTenancy extends TestCase
{

/* TENANCY
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createContact() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Tenancy\Contacts();
        $d = new Data\Tenancy\Contacts();
        $d->set( 'name', 'PHPUnit_ Contact-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeContact( int $id ) : void
    {
        $o = new Controllers\Tenancy\Contacts();
        $o->delete( id: $id );
    }



/* TENANCY
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createTenant() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Tenancy\Tenants();
        $d = new Data\Tenancy\Tenants();
        $d->set( 'name', 'PHPUnit_Tenant-' . $rand );
        $d->set( 'slug', 'PHPUnit_Tenant-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeTenant( int $id ) : void
    {
        $o = new Controllers\Tenancy\Tenants();
        $o->delete( id: $id );
    }


/* TENANCY
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createTenantGroup() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Tenancy\TenantGroups();
        $d = new Data\Tenancy\TenantGroups();
        $d->set( 'name', 'PHPUnit_TenantGroup-' . $rand );
        $d->set( 'slug', 'PHPUnit_TenantGroup-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeTenantGroup( int $id ) : void
    {
        $o = new Controllers\Tenancy\TenantGroups();
        $o->delete( id: $id );
    }


/* TENANCY
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createContactGroup() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Tenancy\ContactGroups();
        $d = new Data\Tenancy\ContactGroups();
        $d->set( 'name', 'PHPUnit_ContactGroup-' . $rand );
        $d->set( 'slug', 'PHPUnit_ContactGroup-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeContactGroup( int $id ) : void
    {
        $o = new Controllers\Tenancy\ContactGroups();
        $o->delete( id: $id );
    }


/* TENANCY
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createContactRole() : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Tenancy\ContactRoles();
        $d = new Data\Tenancy\ContactRoles();
        $d->set( 'name', 'PHPUnit_ContactRole-' . $rand );
        $d->set( 'slug', 'PHPUnit_ContactRole-' . $rand );

        return $o->create( data: $d );
    }

    public static function removeContactRole( int $id ) : void
    {
        $o = new Controllers\Tenancy\ContactRoles();
        $test = $o->delete( id: $id );
    }



/* TENANCY
---------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public static function createContactAssignment(
        int $site_id,
        int $contact_id,
        int $role_id
    ) : object
    {
        $rand = rand( 1, 100000 );
        $o = new Controllers\Tenancy\ContactAssignments();
        $d = new Data\Tenancy\ContactAssignments();
        $d->set( 'contact', $contact_id );
        $d->set( 'object_id', $site_id );
        $d->set( 'content_type', 'dcim.site' );
        $d->set( 'role', $role_id );

        return $o->create( data: $d );
    }


/* TENANCY
---------------------------------------------------------------------------- */

    public static function removeContactAssignment( int $id ) : void
    {
        $o = new Controllers\Tenancy\ContactAssignments();
        $o->delete( id: $id );
    }

}