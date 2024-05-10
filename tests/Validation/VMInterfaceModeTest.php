<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class VMInterfaceModeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\VMInterfaceMode;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_VMInterfaceMode( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_VMInterfaceMode( input: 'bad input' );
        self::assertIsString( $result );
    }
}