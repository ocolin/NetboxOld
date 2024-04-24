<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RangeInt.php';

use PHPUnit\Framework\TestCase;

final class RangeIntTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RangeInt;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RangeInt( 100, 0, 1000 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RangeInt( 100, 101, 1000 );
        self::assertIsString( $result );
    }
}