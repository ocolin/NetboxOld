<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/DeviceFace.php';

use PHPUnit\Framework\TestCase;

final class DeviceFaceTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\DeviceFace;

    /*
    ----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_DeviceFace( input: 'front' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

    /*
    ----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_DeviceFace( input: 'bad input' );
        self::assertIsString( $result );
    }
}