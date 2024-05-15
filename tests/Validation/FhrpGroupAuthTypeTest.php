<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\FhrpGroupAuthType;
use PHPUnit\Framework\TestCase;

final class FhrpGroupAuthTypeTest extends TestCase
{
    use FhrpGroupAuthType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_FhrpGroupAuthType( input: 'plaintext' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FhrpGroupAuthType( input: 'bad input' );
        self::assertIsString( $result );
    }
}