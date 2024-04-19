<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PowerOutletType.php';

use PHPUnit\Framework\TestCase;

final class PowerOutletTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerOutletType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PowerOutletType( input: 'iec-60320-c5' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerOutletType( input: 'bad input' );
        self::assertIsString( $result );
    }
}