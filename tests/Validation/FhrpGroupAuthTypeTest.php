<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/FhrpGroupAuthType.php';

use PHPUnit\Framework\TestCase;

final class FhrpGroupAuthTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\FhrpGroupAuthType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_FhrpGroupAuthType( input: 'plaintext' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FhrpGroupAuthType( input: 'bad input' );
        self::assertIsString( $result );
    }
}