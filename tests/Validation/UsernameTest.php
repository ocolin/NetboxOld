<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\Username;
use PHPUnit\Framework\TestCase;

final class UsernameTest extends TestCase
{
    use Username;


/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_Username( input: 'abc123_@.+-' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Username( input: '%^&' );
        self::assertIsString( $result );
    }
}