<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RackWidth.php';

use PHPUnit\Framework\TestCase;

final class RackWidthTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RackWidth;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RackWidth( input: 10 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RackWidth( input: 0 );
        self::assertIsString( $result );
    }
}