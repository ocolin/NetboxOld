<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\IpRangeStatus;
use PHPUnit\Framework\TestCase;

final class IpRangeStatusTest extends TestCase
{
    use IpRangeStatus;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_IpRangeStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_IpRangeStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}