<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/CircuitStatus.php';

use PHPUnit\Framework\TestCase;

final class CircuitStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\CircuitStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_CircuitStatus( input: 'provisioning' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CircuitStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}