<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\MinNumber;
use PHPUnit\Framework\TestCase;

final class MinNumberTest extends TestCase
{
    use MinNumber;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_MinNumber( 100, 10 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MinNumber( 1, 5 );
        self::assertIsString( $result );
    }
}