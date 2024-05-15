<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\CustomFieldObjectType;
use PHPUnit\Framework\TestCase;

final class CustomFieldObjectTypeTest extends TestCase
{
    use CustomFieldObjectType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_CustomFieldObjectType( input: 'account.usertoken' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CustomFieldObjectType( input: 'bad input' );
        self::assertIsString( $result );
    }
}