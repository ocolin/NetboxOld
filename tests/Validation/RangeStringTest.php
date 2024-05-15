<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\RangeString;
use PHPUnit\Framework\TestCase;

final class RangeStringTest extends TestCase
{
    use RangeString;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_RangeString( "100", 3, 3 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RangeString( "Bad", 100, 1000 );
        self::assertIsString( $result );
    }
}