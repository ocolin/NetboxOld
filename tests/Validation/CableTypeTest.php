<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/CableType.php';

use PHPUnit\Framework\TestCase;

final class CableTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\CableType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_CableType( input: 'cat6' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CableType( input: 'bad input' );
        self::assertIsString( $result );
    }
}