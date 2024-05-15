<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\CableStatus;
use PHPUnit\Framework\TestCase;

final class CableStatusTest extends TestCase
{
    use CableStatus;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_CableStatus( input: 'planned' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CableStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}