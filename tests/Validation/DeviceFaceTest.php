<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class DeviceFaceTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\DeviceFace;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_DeviceFace( input: 'front' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_DeviceFace( input: 'bad input' );
        self::assertIsString( $result );
    }
}