<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class IpRoleTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\IpRole;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_IpRole( input: 'loopback' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_IpRole( input: 'bad input' );
        self::assertIsString( $result );
    }
}