<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ServiceProtocol.php';

use PHPUnit\Framework\TestCase;

final class ServiceProtocolTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ServiceProtocol;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ServiceProtocol( input: 'tcp' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ServiceProtocol( input: 'bad input' );
        self::assertIsString( $result );
    }
}