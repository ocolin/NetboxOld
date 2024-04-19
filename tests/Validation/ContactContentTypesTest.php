<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ContactContentTypes.php';

use PHPUnit\Framework\TestCase;

final class ContactContentTypesTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ContactContentTypes;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ContactContentTypes( input: 'dcim.manufacturer' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ContactContentTypes( input: 'bad input' );
        self::assertIsString( $result );
    }
}