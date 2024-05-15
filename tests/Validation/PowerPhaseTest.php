<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\PowerPhase;
use PHPUnit\Framework\TestCase;

final class PowerPhaseTest extends TestCase
{
    use PowerPhase;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PowerPhase( input: 'single-phase' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerPhase( input: 'bad input' );
        self::assertIsString( $result );
    }
}