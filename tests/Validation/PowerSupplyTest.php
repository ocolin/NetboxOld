<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PowerSupply.php';

use PHPUnit\Framework\TestCase;

final class PowerSupplyTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerSupply;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PowerSupply( input: 'ac' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerSupply( input: 'bad input' );
        self::assertIsString( $result );
    }
}