<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class DateTimeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\DateTime;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_DateTime( input: '2024-12-12T01:01:01.1234' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_DateTime( input: 'bad input' );
        self::assertIsString( $result );
    }
}