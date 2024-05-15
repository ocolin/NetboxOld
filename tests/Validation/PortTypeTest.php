<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\PortType;
use PHPUnit\Framework\TestCase;

final class PortTypeTest extends TestCase
{
    use PortType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PortType( input: '8p8c' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PortType( input: 'bad input' );
        self::assertIsString( $result );
    }
}