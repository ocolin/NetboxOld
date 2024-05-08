<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ConsoleSpeed.php';

use PHPUnit\Framework\TestCase;

final class ConsoleSpeedTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ConsoleSpeed;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ConsoleSpeed( input: 1200 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ConsoleSpeed( input: 0 );
        self::assertIsString( $result );
    }
}