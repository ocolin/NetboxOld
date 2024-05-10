<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class PowerOutletTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerOutletType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PowerOutletType( input: 'iec-60320-c5' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerOutletType( input: 'bad input' );
        self::assertIsString( $result );
    }
}