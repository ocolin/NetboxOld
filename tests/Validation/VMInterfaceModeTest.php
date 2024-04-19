<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/VMInterfaceMode.php';

use PHPUnit\Framework\TestCase;

final class VMInterfaceModeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\VMInterfaceMode;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_VMInterfaceMode( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_VMInterfaceMode( input: 'bad input' );
        self::assertIsString( $result );
    }
}