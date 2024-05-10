<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class TerminationTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\TerminationType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_TerminationType( input: 'circuits.circuittermination' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_TerminationType( input: 'bad input' );
        self::assertIsString( $result );
    }
}