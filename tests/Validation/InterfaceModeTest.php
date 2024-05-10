<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class InterfaceModeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\InterfaceMode;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_InterfaceMode( input: 'access' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_InterfaceMode( input: 'bad input' );
        self::assertIsString( $result );
    }
}