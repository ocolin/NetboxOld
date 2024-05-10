<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class TerminalSideTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\TerminalSide;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_TerminalSide( input: 'A' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_TerminalSide( input: 'bad input' );
        self::assertIsString( $result );
    }
}