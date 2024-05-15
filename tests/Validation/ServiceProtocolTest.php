<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\ServiceProtocol;
use PHPUnit\Framework\TestCase;

final class ServiceProtocolTest extends TestCase
{
    use ServiceProtocol;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_ServiceProtocol( input: 'tcp' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ServiceProtocol( input: 'bad input' );
        self::assertIsString( $result );
    }
}