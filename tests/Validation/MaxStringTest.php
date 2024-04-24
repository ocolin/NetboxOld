<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/MaxString.php';

use PHPUnit\Framework\TestCase;

final class MaxStringTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\MaxString;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_MaxString( 'this is good', 100 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MaxString( 'bad input test', 5 );
        self::assertIsString( $result );
    }
}