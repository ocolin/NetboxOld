<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/DeviceRole.php';

use PHPUnit\Framework\TestCase;

final class DeviceRoleTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\DeviceRole;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_DeviceRole( input: 'parent' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_DeviceRole( input: 'bad input' );
        self::assertIsString( $result );
    }
}