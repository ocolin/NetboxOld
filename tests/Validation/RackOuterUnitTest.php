<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RackOuterUnit.php';

use PHPUnit\Framework\TestCase;

final class RackOuterUnitTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RackOuterUnit;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RackOuterUnit( input: 'mm' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RackOuterUnit( input: 'bad input' );
        self::assertIsString( $result );
    }
}