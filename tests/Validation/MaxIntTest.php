<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\MaxInt;
use PHPUnit\Framework\TestCase;

final class MaxIntTest extends TestCase
{
    use MaxInt;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_MaxInt( 100, 1000 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MaxInt( 100, 5 );
        self::assertIsString( $result );
    }
}