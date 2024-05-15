<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\Duplex;
use PHPUnit\Framework\TestCase;

final class DuplexTest extends TestCase
{
    use Duplex;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_Duplex( input: 'full' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Duplex( input: 'bad input' );
        self::assertIsString( $result );
    }
}