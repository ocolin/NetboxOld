<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class MacAddressTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\MacAddress;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_MacAddress( input: '00:00:00:00:00:00' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MacAddress( input: 'bad input' );
        self::assertIsString( $result );
    }
}