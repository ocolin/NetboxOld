<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/WeightUnit.php';

use PHPUnit\Framework\TestCase;

final class WeightUnitTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\WeightUnit;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_WeightUnit( input: 'lb' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_WeightUnit( input: 'bad input' );
        self::assertIsString( $result );
    }
}