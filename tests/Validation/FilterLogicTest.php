<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class FilterLogicTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\FilterLogic;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_FilterLogic( input: 'exact' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FilterLogic( input: 'bad input' );
        self::assertIsString( $result );
    }
}