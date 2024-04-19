<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ButtonClass.php';

use PHPUnit\Framework\TestCase;

final class ButtonClassTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ButtonClass;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ButtonClass( input: 'blue' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ButtonClass( input: 'bad input' );
        self::assertIsString( $result );
    }
}