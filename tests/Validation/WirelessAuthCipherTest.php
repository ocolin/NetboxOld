<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/WirelessAuthCipher.php';

use PHPUnit\Framework\TestCase;

final class WirelessAuthCipherTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\WirelessAuthCipher;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_WirelessAuthCipher( input: 'auto' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_WirelessAuthCipher( input: 'bad input' );
        self::assertIsString( $result );
    }
}