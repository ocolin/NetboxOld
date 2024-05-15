<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\PrefixStatus;
use PHPUnit\Framework\TestCase;

final class PrefixStatusTest extends TestCase
{
    use PrefixStatus;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PrefixStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PrefixStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}