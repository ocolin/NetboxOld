<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Date.php';

use PHPUnit\Framework\TestCase;

final class DateTimeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\DateTime;


/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_DateTime( input: '2024-12-12T01:01:01.1234' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_DateTime( input: 'bad input' );
        self::assertIsString( $result );
    }
}