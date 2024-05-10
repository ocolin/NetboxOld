<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class ContactContentTypesTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ContactContentTypes;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_ContactContentTypes( input: 'dcim.manufacturer' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ContactContentTypes( input: 'bad input' );
        self::assertIsString( $result );
    }
}