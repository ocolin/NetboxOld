<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RangeString.php';

use PHPUnit\Framework\TestCase;

final class RangeStringTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RangeString;

    /*
    ----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RangeString( "100", 3, 3 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


    /*
    ----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RangeString( "Bad", 100, 1000 );
        self::assertIsString( $result );
    }
}