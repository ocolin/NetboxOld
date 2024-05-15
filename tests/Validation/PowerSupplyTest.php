<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\PowerSupply;
use PHPUnit\Framework\TestCase;

final class PowerSupplyTest extends TestCase
{
    use PowerSupply;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PowerSupply( input: 'ac' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerSupply( input: 'bad input' );
        self::assertIsString( $result );
    }
}