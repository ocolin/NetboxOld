<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\RackType;
use PHPUnit\Framework\TestCase;

final class RackTypeTest extends TestCase
{
    use RackType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_RackType( input: '2-post-frame' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RackType( input: 'bad input' );
        self::assertIsString( $result );
    }
}