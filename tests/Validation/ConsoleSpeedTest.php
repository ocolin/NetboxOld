<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class ConsoleSpeedTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ConsoleSpeed;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_ConsoleSpeed( input: 1200 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ConsoleSpeed( input: 0 );
        self::assertIsString( $result );
    }
}