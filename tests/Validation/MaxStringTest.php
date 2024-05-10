<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class MaxStringTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\MaxString;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_MaxString( 'this is good', 100 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MaxString( 'bad input test', 5 );
        self::assertIsString( $result );
    }
}