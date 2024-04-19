<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/InterfaceMode.php';

use PHPUnit\Framework\TestCase;

final class InterfaceModeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\InterfaceMode;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_InterfaceMode( input: 'access' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_InterfaceMode( input: 'bad input' );
        self::assertIsString( $result );
    }
}