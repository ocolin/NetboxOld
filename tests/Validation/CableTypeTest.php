<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\CableType;
use PHPUnit\Framework\TestCase;

final class CableTypeTest extends TestCase
{
    use CableType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_CableType( input: 'cat6' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CableType( input: 'bad input' );
        self::assertIsString( $result );
    }
}