<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/CIDR.php';

use PHPUnit\Framework\TestCase;

final class CIDRTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\CIDR;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_CIDR( input: '10.10.10.10/24' );

        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CIDR( input: '123' );

        self::assertIsString( $result );
    }
}