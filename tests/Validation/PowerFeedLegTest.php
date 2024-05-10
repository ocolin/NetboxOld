<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class PowerFeedLegTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerFeedLeg;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PowerFeedLeg( input: 'A' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerFeedLeg( input: 'bad input' );
        self::assertIsString( $result );
    }
}