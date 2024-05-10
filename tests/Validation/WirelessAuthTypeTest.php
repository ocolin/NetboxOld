<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/WirelessAuthType.php';

use PHPUnit\Framework\TestCase;

final class WirelessAuthTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\WirelessAuthType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_WirelessAuthType( input: 'wep' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_WirelessAuthType( input: 'bad input' );
        self::assertIsString( $result );
    }
}