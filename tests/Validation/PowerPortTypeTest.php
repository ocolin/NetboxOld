<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class PowerPortTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerPortType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PowerPortType( input: 'iec-60320-c6' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerPortType( input: 'bad input' );
        self::assertIsString( $result );
    }
}