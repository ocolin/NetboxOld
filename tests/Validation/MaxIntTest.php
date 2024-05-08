<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/MaxInt.php';

use PHPUnit\Framework\TestCase;

final class MaxIntTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\MaxInt;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_MaxInt( 100, 1000 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MaxInt( 100, 5 );
        self::assertIsString( $result );
    }
}