<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class RackOuterUnitTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RackOuterUnit;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_RackOuterUnit( input: 'mm' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RackOuterUnit( input: 'bad input' );
        self::assertIsString( $result );
    }
}