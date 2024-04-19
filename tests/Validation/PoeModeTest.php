<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PoeMode.php';

use PHPUnit\Framework\TestCase;

final class PoeModeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PoeMode;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PoeMode( input: 'pse' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PoeMode( input: 'bad input' );
        self::assertIsString( $result );
    }
}