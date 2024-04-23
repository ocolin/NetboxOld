<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Date.php';

use PHPUnit\Framework\TestCase;

final class DateTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Date;


/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_Date( input: '2024-12-12' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Date( input: 'bad input' );
        self::assertIsString( $result );
    }
}