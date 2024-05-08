<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PowerPhase.php';

use PHPUnit\Framework\TestCase;

final class PowerPhaseTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerPhase;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PowerPhase( input: 'single-phase' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerPhase( input: 'bad input' );
        self::assertIsString( $result );
    }
}