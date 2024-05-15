<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\ButtonClass;
use PHPUnit\Framework\TestCase;

final class ButtonClassTest extends TestCase
{
    use ButtonClass;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_ButtonClass( input: 'blue' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ButtonClass( input: 'bad input' );
        self::assertIsString( $result );
    }
}