<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class PoeModeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PoeMode;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PoeMode( input: 'pse' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PoeMode( input: 'bad input' );
        self::assertIsString( $result );
    }
}