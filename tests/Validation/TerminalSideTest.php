<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\TerminalSide;
use PHPUnit\Framework\TestCase;

final class TerminalSideTest extends TestCase
{
    use TerminalSide;

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