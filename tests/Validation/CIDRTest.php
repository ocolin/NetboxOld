<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class CIDRTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\CIDR;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_CIDR( input: '10.10.10.10/24' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CIDR( input: '123' );

        self::assertIsString( $result );
    }
}