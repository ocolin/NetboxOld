<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\RackWidth;
use PHPUnit\Framework\TestCase;

final class RackWidthTest extends TestCase
{
    use RackWidth;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_RackWidth( input: 10 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RackWidth( input: 0 );
        self::assertIsString( $result );
    }
}