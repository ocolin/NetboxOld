<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\RangeInt;
use PHPUnit\Framework\TestCase;

final class RangeIntTest extends TestCase
{
    use RangeInt;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_RangeInt( 100, 0, 1000 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RangeInt( 100, 101, 1000 );
        self::assertIsString( $result );
    }
}