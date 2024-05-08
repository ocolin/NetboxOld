<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/FhrpGroupProtocol.php';

use PHPUnit\Framework\TestCase;

final class FhrpGroupProtocolTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\FhrpGroupProtocol;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_FhrpGroupProtocol( input: 'vrrp2' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FhrpGroupProtocol( input: 'bad input' );
        self::assertIsString( $result );
    }
}