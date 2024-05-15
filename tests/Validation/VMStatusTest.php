<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\VMStatus;
use PHPUnit\Framework\TestCase;

final class VMStatusTest extends TestCase
{
    use VMStatus;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_VMStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_VMStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}