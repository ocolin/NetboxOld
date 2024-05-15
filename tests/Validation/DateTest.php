<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\Date;
use PHPUnit\Framework\TestCase;

final class DateTest extends TestCase
{
    use Date;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_Date( input: '2024-12-12' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Date( input: 'bad input' );
        self::assertIsString( $result );
    }
}