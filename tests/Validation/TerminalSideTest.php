<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/TerminalSide.php';

use PHPUnit\Framework\TestCase;

final class TerminalSideTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\TerminalSide;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_TerminalSide( input: 'A' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_TerminalSide( input: 'bad input' );
        self::assertIsString( $result );
    }
}