<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ConsolePortType.php';

use PHPUnit\Framework\TestCase;

final class ConsolePortTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ConsolePortType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ConsolePortType( input: 'de-9' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ConsolePortType( input: 'bad input' );
        self::assertIsString( $result );
    }
}