<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PortType.php';

use PHPUnit\Framework\TestCase;

final class PortTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PortType;

    /*
    ----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PortType( input: '8p8c' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


    /*
    ----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PortType( input: 'bad input' );
        self::assertIsString( $result );
    }
}