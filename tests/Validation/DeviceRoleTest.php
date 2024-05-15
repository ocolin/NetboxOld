<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\DeviceRole;
use PHPUnit\Framework\TestCase;

final class DeviceRoleTest extends TestCase
{
    use DeviceRole;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_DeviceRole( input: 'parent' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_DeviceRole( input: 'bad input' );
        self::assertIsString( $result );
    }
}