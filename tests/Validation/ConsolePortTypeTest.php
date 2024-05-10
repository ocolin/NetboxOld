<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class ConsolePortTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ConsolePortType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_ConsolePortType( input: 'de-9' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ConsolePortType( input: 'bad input' );
        self::assertIsString( $result );
    }
}