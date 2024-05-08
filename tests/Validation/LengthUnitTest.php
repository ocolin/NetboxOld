<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/LengthUnit.php';

use PHPUnit\Framework\TestCase;

final class LengthUnitTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\LengthUnit;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_LengthUnit( input: 'km' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_LengthUnit( input: 'bad input' );
        self::assertIsString( $result );
    }
}