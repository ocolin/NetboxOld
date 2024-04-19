<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/MacAddress.php';

use PHPUnit\Framework\TestCase;

final class MacAddressTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\MacAddress;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_MacAddress( input: '00:00:00:00:00:00' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MacAddress( input: 'bad input' );
        self::assertIsString( $result );
    }
}