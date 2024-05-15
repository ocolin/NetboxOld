<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\CustomFieldType;
use PHPUnit\Framework\TestCase;

final class CustomFieldTypeTest extends TestCase
{
    use CustomFieldType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_CustomFieldType( input: 'text' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CustomFieldType( input: 'bad input' );
        self::assertIsString( $result );
    }
}